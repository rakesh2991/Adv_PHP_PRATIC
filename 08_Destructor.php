<?php
/*
What is Destructor PHP में Destructor एक विशेष प्रकार के फ़ंक्शन को refers करता है, जिसे जब भी 
ऑब्जेक्ट हटा दिया जाता है या दायरे से बाहर हो जाता है तो स्वचालित रूप से कॉल किया जाएगा उस समय ऑब्जेक्ट
को नष्ट करने के लिए Destructor का उपयोग किया जाता है, automatic कॉल, कॉल प्रदर्शित नहीं किया
जा सकता है। destructors के पास parameter नहीं हो सकते हैं।
*/

class Student{
    public $roll;
    function __construct($enroll)               //parameter construct
    {
        echo "para constructore call <br>";
        $this->roll = $enroll;
        echo $this->roll;
    }
    
    function __destruct()           //2. object ko distroy kar dega,  destructors के पास parameter नहीं हो सकते हैं
    {
        echo "<br>object trashed";
    }
}

$stu = new Student(10);             //1. object ke under parameter ko access kar te hai

?>