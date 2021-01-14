<?php


namespace App\Repository\PlannedActivities;


use App\Models\PlannedActivity;
use Illuminate\Database\Eloquent\Collection;

class PlannedActivitiesRepository implements PlannedActivitiesContract
{
    public function getPlannedActivities(): Collection
    {
        return PlannedActivity::all();
    }
}
