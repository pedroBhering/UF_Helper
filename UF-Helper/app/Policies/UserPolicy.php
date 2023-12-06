<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $model)
    {
        //
    }

    public function add(User $user, User $model): bool
    {
        return User::PROFESSOR == $user->tipo;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return User::PROFESSOR == $user->tipo;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $model): bool
    {
        return User::PROFESSOR == $user->tipo;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $model): bool
    {
        return User::PROFESSOR == $user->tipo;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model)
    {
        //
    }

    /**
    * Determine whether the user can comment a subject.
    */

    public function comment(User $user, User $model): bool
    {
        return User::MONITOR == $user->tipo || User::PROFESSOR == $user->tipo;
    }

    public function deleteComment(User $user, User $model): bool
    {
        return User::MONITOR == $user->tipo || User::PROFESSOR == $user->tipo;
    }

}
