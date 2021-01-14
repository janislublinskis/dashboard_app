<?php


namespace App\Repository\PlannedActivities;


use Illuminate\Database\Eloquent\Collection;

interface PlannedActivitiesContract
{
    public function getPlannedActivities(): Collection;
}
