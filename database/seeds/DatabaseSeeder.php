<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ClubsTableSeeder::class);
        $this->call(SchoolCallingsTableSeeder::class);
        $this->call(ClubCallingsTableSeeder::class);
        $this->call(ClubMembersTableSeeder::class);
        $this->call(MypagesTableSeeder::class);
        $this->call(StrategiesTableSeeder::class);
        $this->call(DiscussionsTableSeeder::class);
        $this->call(DiscussionCountsTableSeeder::class);
        $this->call(DiscussionCommentsTableSeeder::class);
        $this->call(DiscussionCommentCountsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuCountsTableSeeder::class);
        $this->call(MenuCommentsTableSeeder::class);
        $this->call(MenuCommentCountsTableSeeder::class);
        $this->call(TimezonesTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(CalendarsTableSeeder::class);
        $this->call(CalendarCountsTableSeeder::class);
        $this->call(CalendarCommentsTableSeeder::class);
        $this->call(CalendarCommentCountsTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(JournalsTableSeeder::class);
        $this->call(JournalCountsTableSeeder::class);
        $this->call(JournalCommentsTableSeeder::class);
        $this->call(JournalCommentCountsTableSeeder::class);
    }
}
