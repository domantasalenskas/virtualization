<?php
class Controller_WorkSchedule extends Controller_Template
{
    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index()
    {
        $schedule = Model_Schedule::find('all');
        $data = array('schedule' => $schedule);
        $this->template->title = 'Example Page';
        $this->template->content = View::forge('workSchedule/index', $data);
    }
}
?>