<?php
if (! function_exists('btn_primary_a')) {
    function btn_primary_a($text="demo text",$href="#",$size="md",$shape="square",$id="",$extra_class="")
    {
        $class="";
        if($shape!="square")
        {
            $class="btn-circle";
        }
        $class.=" btn-".$size;
        return '<a id="'.$id.'" href="'.$href.'" class="btn btn-primary '.$class.'">'.$text.'</a>';
    }
}
if (! function_exists('btn_danger_a')) {
    function btn_danger_a($text="demo text",$href="#",$size="md",$shape="square",$id="",$extra_class="")
    {
        $class="";
        if($shape!="square")
        {
            $class="btn-circle";
        }
        $class.=" btn-".$size;
        return '<a id="'.$id.'" href="'.$href.'" class="btn btn-danger '.$class.'">'.$text.'</a>';
    }
}
if (! function_exists('btn_warning_a')) {
    function btn_warning_a($text="demo text",$href="#",$size="md",$shape="square",$id="",$extra_class="")
    {
        $class="";
        if($shape!="square")
        {
            $class="btn-circle";
        }
        $class.=" btn-".$size;
        return '<a id="'.$id.'" href="'.$href.'" class="btn btn-warning '.$class.'">'.$text.'</a>';
    }
}
if (! function_exists('btn_success_a')) {
    function btn_success_a($text="demo text",$href="#",$size="md",$shape="square",$id="",$extra_class="")
    {
        $class="";
        if($shape!="square")
        {
            $class="btn-circle";
        }
        $class.=" btn-".$size;
        return '<a id="'.$id.'" href="'.$href.'" class="btn btn-success '.$class.'">'.$text.'</a>';
    }
}
// btn info
if (! function_exists('btn_info_a')) {
    function btn_info_a($text="demo text",$href="#",$size="md",$shape="square",$id="",$extra_class="")
    {
        $class="";
        if($shape!="square")
        {
            $class="btn-circle";
        }
        $class.=" btn-".$size;
        return '<a id="'.$id.'" href="'.$href.'" class="btn btn-info '.$class.'">'.$text.'</a>';
    }
}
