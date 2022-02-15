# fakeDataGenerator
Generate Chinese fake data
/* using */
include fakeData.php
$fakeData = new fakeData;
$fakeData->getFakeDatas(10); // for generate 10 chinese fake data. include name, age, gender
$fakeData->randName();  // generate one chinese name
$fakeData->randFirstName();  // generate one chinese first name
$fakeData->randLastName(); // generate one chinese last name
$fakeData->getGender(); // generate  M for male or F for female
$fakeData->getAge(); // generate 15 ~ 85 numbers
