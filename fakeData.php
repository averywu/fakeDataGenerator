<?php
/*   
    author : averywu.tw@gmail.com
    version : 0.1  
*/  
namespace fakeData;
class fakeData
{
    private $firstNameArray;
    private $femaleLastNameArray;
    // private $maleLastNameArray;
    private $gender;
    private $age;
    public function getFakeDatas($count = 1){
        if($count > 1){
            $return = array();
            for($i=0; $i < $count; $i++){
                $tmp = new \stdClass();
                $tmp->name = $this->randName();
                $tmp->age = $this->age;
                $tmp->gender = $this->gender;
                array_push($return,$tmp);
            }
        }else{
            $return = new \stdClass();
            $return->name = $this->randName();
            $return->age = $this->age;
            $return->gender = $this->gender;
        }
        return $return;
    }
    public function randName(){
        $return = $this->randFirstName().$this->randLastName();
        return $return;
    }
    public function randFirstName(){
        $this->firstNameArray = array(
            19969,20309,20313,20399,20522,20613,21129,21331,21476,21555,21570,21608,21776,22196,22615,22799,23002,23004,23403,23435,23588,24043,24247,24278,24373,
            24429,24464,25140,26041,26045,26361,26366,26417,26446,26460,26519,26607,26611,26753,26954,27472,27743,27754,27784,27946,28271,28331,28504,29579,30000,
            30333,30439,30707,31243,31461,31684,31777,32000,32645,32705,32993,33674,33865,33891,34081,34083,34157,34203,34253,34311,34945,35377,35449,35613,36084,
            36249,36899,36938,37041,37045,37101,37138,37159,37165,37329,37666,37912,37912,38446,38515,38520,38867,38991,39340,39342,39640,39759,40643,40654,40852
        );
        return $this->showChar($this->firstNameArray[rand(0,99)]);
    }
    public function getGender(){
        return rand(0,1) === 1 ? 'M':'F';
    }
    public function getAge(){
        return rand(15,85);
    }
    public function randLastName(){
        $this->femaleLastNameArray = array(
            20025,20126,20195,20278,20381,20446,20521,20925,21375,21487,21604,22025,22241,22818,22908,22914,22915,22925,22937,22989,23006,23020,23039,23049,23068,
            23071,23077,23113,23143,23149,23159,23270,23291,23307,23451,23527,23631,23888,23992,24179,24433,24515,24565,24609,24709,24736,24800,24935,25014,25935,
            26126,26157,26228,26230,26313,26342,26364,26376,26519,26525,26611,26757,26771,26963,26970,27054,27427,27700,28459,28500,28777,28982,29081,29141,29599,
            29605,29638,29645,29738,29740,29747,29783,29788,29796,29831,29855,29863,30408,30473,31179,31310,32020,32032,32043,32114,32654,32701,32718,32880,33298,
            33454,33455,33457,33489,33509,33521,33559,33564,33673,33678,33683,33728,33729,33738,33775,33777,33805,33841,33993,34003,34030,34174,34183,34224,34253,
            34269,34315,34678,35424,35433,35895,35924,35998,36234,37504,38597,38634,38639,38706,38724,38738,38742,38748,38899,39080,39321,39329,39333,39336,40367);
        $return = '';
        $len = rand(1,10);
        $lens = $len === 10 ? 1 : 2;
        $this->gender = $this->getGender();
        $this->age = $this->getAge();
        for($i=0;$i<$lens;$i++){
            $return .= $this->gender === 'M' ? $this->showChar(rand(19000,40000)) : $this->showChar($this->femaleLastNameArray[rand(0,149)]);
        }
        return $return;
    }
    private function showChar($o) {
        return mb_convert_encoding('&#'.(int)$o.';', 'utf-8', 'HTML-ENTITIES');
    }
}
