<?php


namespace App\Repositories;
use App\Http\Controllers\UserController;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Void_;

class UserRepository extends BaseRepository {
    /**
     * @var Model
     */
    protected $model;

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return 'App\User';
    }

    /**
     * @return Collection|Model[]
     */
    public function allUsers(){
        $users = $this->startCondition()
            ->all();
        return $users;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function userById($id){
        $user = $this->startCondition()
            ->find($id);
        return $user;
    }

    /**
     * @param $thisUser
     * @param $friend
     * @return int
     */
    public function addFriend($thisUser, $friend)
    {
        $user = $this -> startCondition()
            ->find($thisUser);
        $exists = DB::table('friends')
            ->where('second_id', '=', $thisUser)
            ->where('first_id','=', $friend)
            ->orWhere(function ($query) use ($friend, $thisUser) {
                $query->where('second_id', '=', $friend)
                    ->where('first_id','=', $thisUser);
            })
            ->exists();
        if ($exists)
        {
            return 0;
        }
        else
        {
            $user->friends()->syncWithoutDetaching($friend);
            return 1;
        }
    }

    /**
     * @param $id0
     * @param $id1
     * @return int
     */
    public function acceptFriend($id0, $id1)
    {
        DB::table('friends')
            ->where(
                [
                    'second_id'=> $id0,
                    'first_id' => $id1
                ]
            )
            ->update(['accepted' => 1]);

        return 1;
    }

    /**
     * @param $id
     * @return array
     */
    public function showFriends($id)
    {
        $friends = DB::table('friends')
            ->where([
                'second_id'=> $id,
                'accepted' => 1,
            ])
            ->orWhere([
                'first_id'=> $id,
                'accepted' => 1,
            ])
            ->get();
        $friendsid = [];
        foreach ($friends as $friend)
        {
            if ($friend->first_id == $id)
            {
                $friendsid[] = $friend->second_id;
            }
            else
            {
                $friendsid[] = $friend->first_id;
            }
        }

        return $friendsid;
    }

    /**
     * @param $id
     * @return array
     */
    public function showFriendsInfo($id)
    {
        $friendsid = $this->showFriends($id);
        foreach ($friendsid as $value)
        {
            $friendsinfo[] = $this->userById($value);
        }
        return $friendsinfo;
    }

    /**
     * @param $id
     * @return int
     */
    public function deleteUser($id)
    {
        $user = $this ->startCondition()
            ->where('id',$id)
            ->delete();
        return 1;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function checkPermissions($id)
    {
        $permissions = $this->startCondition()
            ->where('id', $id)
            ->pluck('permissions');
        return $permissions[0];
    }

    /**
     * @param $id
     * @param $newP
     * @return int
     */
    public function changePermissions($id, $newP)
    {
        $user = $this->startCondition()
            ->where('id', $id)
            ->update(['permissions' => $newP]);
        return 1;
    }

}
