<div class="planned-activities">
    <div class="sections-header planned-activities-header">Plānotās aktivitātes</div>
    <div class="planned-activities-list">
        @foreach($plannedActivities as $activity)
        <div class="planned-activity">
            <div class="planned-activity-date">{{ $activity->formatDate() }}</div>
            <div class="planned-activity-details">{{ $activity->name }}</div>
        </div>
        @endforeach
    </div>
    <div class="occasions">
        <div class="names-day">{{ $namesDay }}</div>
        <div class="birthday-day">Dzimšanas dienas svin: Jānis Bērziņš</div>
    </div>
</div>