<?php namespace Flarum\Core\Users;

use Flarum\Core\Model;

class Group extends Model
{
    /**
     * {@inheritdoc}
     */
    protected $table = 'groups';

    /**
     * The ID of the administrator group.
     */
    const ADMINISTRATOR_ID = 1;

    /**
     * The ID of the guest group.
     */
    const GUEST_ID = 2;

    /**
     * The ID of the member group.
     */
    const MEMBER_ID = 3;

    /**
     * Define the relationship with the group's users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('Flarum\Core\Users\User', 'users_groups');
    }
}