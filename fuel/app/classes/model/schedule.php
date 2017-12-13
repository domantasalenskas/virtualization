<?php
class Model_Schedule extends Orm\Model {
    protected static $_properties = array(
        'id',
        'fname',
        'lname',
        'workDays',
        'timeStart',
        'timeEnd'
    );
}