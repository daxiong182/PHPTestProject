<?php


trait Log{
    public function save()
    {
        return __METHOD__;
    }
}


trait Comment{
    public function save()
    {
        return __METHOD__;
    }
}


class Topic 
{
    use Log,Comment{
        Log::save insteadOf Comment;
    }
}


$topic =new Topic;
echo $topic ->save();






































?>