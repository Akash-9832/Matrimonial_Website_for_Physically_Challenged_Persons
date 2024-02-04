<?php include("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Registration</title>
</head>

<body>
    <div class="first">
        <nav>
            <p>
                <a href="index.php">
                    <big></big><big><span class="logo">
                            <big><big><big><big><b><i>A</i></b></big></big></big></big></span><big>lliance</big><br>
                        <span class="logo">
                            <big><big><big><b><i>W</i></b></big></big></big></span><big>eds.com</big></big></big>
                </a>
            </p>
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="index.php">About Us</a>
                <a href="login.php">Login</a>
                <a href="search.php">Search</a>
                <!-- <a href="#">Membership</a> -->
                <a href="index.php">Terms & Condition</a>
            </div>
        </nav>
    </div>
    <div class="form">
        <form method="POST" action="#" enctype="multipart/form-data" id="Reg">
            <div class="reg">
                <h2>Registration Form</h2>
            </div>
            <br>
            <fieldset>
                <legend><b>Personal Information <span class="red-text">*</span></b></legend><br>
                <div>
                    <label for="profile">Profile For:</label>
                    <select name="profile" id="profile" required>
                        <option value="Self">Self</option>
                        <option value="Son">Son</option>
                        <option value="Daughter">Daughter</option>
                        <option value="Brother">Brother</option>
                        <option value="Sister">Sister</option>
                        <option value="Relatives">Relatives</option>
                        <option value="Friends">Friends</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="name">Member Name:</label>
                    <input type="text" name="name" id="name" placeholder="&emsp;Your Name" required>
                </div>
                <br>
                <div>
                    <label for="email">Email ID:</label>
                    <input type="email" name="email" id="email" placeholder="&emsp;abc266@gmail.com" required>
                </div>
                <br>
                <div>
                    <label for="profile-pic">Profile Picture:</label>
                    <input type="file" name="pic" id="pic" accept="image/*" style="cursor: pointer;" required>
                </div>
                <br>
                <div class="Code">
                    <label for="countryId">Country Code:</label>
                    <select class="form-control countryCode" id="countryId" name="code" required>
                        <option value="" class="hide"></option>
                        <option data-countryId="499" selected="selected" value="+91">+91, India</option>
                        <option data-countryId="500" value="500">+93, Afghanistan</option>
                        <option data-countryId="501" value="501">+355, Albania</option>
                        <option data-countryId="502" value="502">+213, Algeria</option>
                        <option data-countryId="503" value="503">+1-684, American Samoa</option>
                        <option data-countryId="504" value="504">+376, Andorra</option>
                        <option data-countryId="505" value="505">+244, Angola</option>
                        <option data-countryId="506" value="506">+1-264, Anguilla</option>
                        <option data-countryId="507" value="507">+672, Antarctica</option>
                        <option data-countryId="508" value="508">+1-268, Antigua And Barbuda</option>
                        <option data-countryId="509" value="509">+54, Argentina</option>
                        <option data-countryId="510" value="510">+374, Armenia</option>
                        <option data-countryId="511" value="511">+297, Aruba</option>
                        <option data-countryId="512" value="512">+61, Australia</option>
                        <option data-countryId="513" value="513">+43, Austria</option>
                        <option data-countryId="514" value="514">+994, Azerbaijan</option>
                        <option data-countryId="515" value="515">+1-242, Bahamas</option>
                        <option data-countryId="516" value="516">+973, Bahrain</option>
                        <option data-countryId="517" value="517">+880, Bangladesh</option>
                        <option data-countryId="518" value="518">+1-246, Barbados</option>
                        <option data-countryId="519" value="519">+375, Belarus</option>
                        <option data-countryId="520" value="520">+32, Belgium</option>
                        <option data-countryId="521" value="521">+501, Belize</option>
                        <option data-countryId="522" value="522">+229, Benin</option>
                        <option data-countryId="523" value="523">+1-441, Bermuda</option>
                        <option data-countryId="524" value="524">+975, Bhutan</option>
                        <option data-countryId="525" value="525">+591, Bolivia</option>
                        <option data-countryId="526" value="526">+387, Bosnia And Herzegovina</option>
                        <option data-countryId="527" value="527">+267, Botswana</option>
                        <option data-countryId="528" value="528">+47, Bouvet Island</option>
                        <option data-countryId="529" value="529">+55, Brazil</option>
                        <option data-countryId="530" value="530">+246, British Indian Ocean Territory</option>
                        <option data-countryId="531" value="531">+1-284, British Virgin Islands</option>
                        <option data-countryId="532" value="532">+673, Brunei</option>
                        <option data-countryId="533" value="533">+673, Brunei Darussalam</option>
                        <option data-countryId="534" value="534">+359, Bulgaria</option>
                        <option data-countryId="535" value="535">+226, Burkina Faso</option>
                        <option data-countryId="536" value="536">+257, Burundi</option>
                        <option data-countryId="537" value="537">+855, Cambodia</option>
                        <option data-countryId="538" value="538">+237, Cameroon</option>
                        <option data-countryId="539" value="539">+1, Canada</option>
                        <option data-countryId="540" value="540">+238, Cape Verde</option>
                        <option data-countryId="541" value="541">+1-345, Cayman Islands</option>
                        <option data-countryId="542" value="542">+236, Central African Republic</option>
                        <option data-countryId="543" value="543">+235, Chad</option>
                        <option data-countryId="544" value="544">+56, Chile</option>
                        <option data-countryId="545" value="545">+86, China</option>
                        <option data-countryId="546" value="546">+61, Christmas Island</option>
                        <option data-countryId="547" value="547">+891, Cocos (Keeling) Islands</option>
                        <option data-countryId="548" value="548">+61, Cocos Islands</option>
                        <option data-countryId="549" value="549">+57, Colombia</option>
                        <option data-countryId="550" value="550">+269, Comoros</option>
                        <option data-countryId="551" value="551">+243, Congo</option>
                        <option data-countryId="552" value="552">+243, Congo The Democratic Republic Of The</option>
                        <option data-countryId="553" value="553">+682, Cook Islands</option>
                        <option data-countryId="554" value="554">+506, Costa Rica</option>
                        <option data-countryId="555" value="555">+225, Cote D&#39;Ivoire</option>
                        <option data-countryId="556" value="556">+385, Croatia</option>
                        <option data-countryId="557" value="557">+53, Cuba</option>
                        <option data-countryId="558" value="558">+599, Curacao</option>
                        <option data-countryId="559" value="559">+357, Cyprus</option>
                        <option data-countryId="560" value="560">+420, Czech Republic</option>
                        <option data-countryId="561" value="561">+243, Democratic Republic of the Congo</option>
                        <option data-countryId="562" value="562">+45, Denmark</option>
                        <option data-countryId="563" value="563">+253, Djibouti</option>
                        <option data-countryId="564" value="564">+1-767, Dominica</option>
                        <option data-countryId="565" value="565">+1-809, 1-829, 1-849, Dominican Republic</option>
                        <option data-countryId="566" value="566">+670, East Timor</option>
                        <option data-countryId="567" value="567">+593, Ecuador</option>
                        <option data-countryId="568" value="568">+20, Egypt</option>
                        <option data-countryId="569" value="569">+503, El Salvador</option>
                        <option data-countryId="570" value="570">+240, Equatorial Guinea</option>
                        <option data-countryId="571" value="571">+291, Eritrea</option>
                        <option data-countryId="572" value="572">+372, Estonia</option>
                        <option data-countryId="573" value="573">+251, Ethiopia</option>
                        <option data-countryId="574" value="574">+500, Falkland Islands</option>
                        <option data-countryId="575" value="575">+500, Falkland Islands (Malvinas)</option>
                        <option data-countryId="576" value="576">+298, Faroe Islands</option>
                        <option data-countryId="577" value="577">+679, Fiji</option>
                        <option data-countryId="578" value="578">+358, Finland</option>
                        <option data-countryId="579" value="579">+33, France</option>
                        <option data-countryId="580" value="580">+594, French Guiana</option>
                        <option data-countryId="581" value="581">+689, French Polynesia</option>
                        <option data-countryId="582" value="582">+262, French Southern Territories</option>
                        <option data-countryId="583" value="583">+241, Gabon</option>
                        <option data-countryId="584" value="584">+220, Gambia</option>
                        <option data-countryId="585" value="585">+995, Georgia</option>
                        <option data-countryId="586" value="586">+49, Germany</option>
                        <option data-countryId="587" value="587">+233, Ghana</option>
                        <option data-countryId="588" value="588">+350, Gibraltar</option>
                        <option data-countryId="589" value="589">+30, Greece</option>
                        <option data-countryId="590" value="590">+299, Greenland</option>
                        <option data-countryId="591" value="591">+1-473, Grenada</option>
                        <option data-countryId="592" value="592">+590, Guadeloupe</option>
                        <option data-countryId="593" value="593">+1-671, Guam</option>
                        <option data-countryId="594" value="594">+502, Guatemala</option>
                        <option data-countryId="595" value="595">+44-1481, Guernsey</option>
                        <option data-countryId="596" value="596">+224, Guinea</option>
                        <option data-countryId="597" value="597">+245, Guinea-Bissau</option>
                        <option data-countryId="598" value="598">+592, Guyana</option>
                        <option data-countryId="599" value="599">+509, Haiti</option>
                        <option data-countryId="600" value="600">+334, Heard Island And Mcdonald Islands</option>
                        <option data-countryId="601" value="601">+379, Holy See (Vatican City State)</option>
                        <option data-countryId="602" value="602">+504, Honduras</option>
                        <option data-countryId="603" value="603">+852, Hong Kong</option>
                        <option data-countryId="604" value="604">+36, Hungary</option>
                        <option data-countryId="605" value="605">+354, Iceland</option>
                        <option data-countryId="607" value="607">+62, Indonesia</option>
                        <option data-countryId="608" value="608">+98, Iran</option>
                        <option data-countryId="609" value="609">+98, Iran Islamic Republic Of</option>
                        <option data-countryId="610" value="610">+964, Iraq</option>
                        <option data-countryId="611" value="611">+353, Ireland</option>
                        <option data-countryId="612" value="612">+44-1624, Isle of Man</option>
                        <option data-countryId="613" value="613">+972, Israel</option>
                        <option data-countryId="614" value="614">+39, Italy</option>
                        <option data-countryId="615" value="615">+225, Ivory Coast</option>
                        <option data-countryId="616" value="616">+1-876, Jamaica</option>
                        <option data-countryId="617" value="617">+81, Japan</option>
                        <option data-countryId="618" value="618">+44-1534, Jersey</option>
                        <option data-countryId="619" value="619">+962, Jordan</option>
                        <option data-countryId="620" value="620">+7, Kazakhstan</option>
                        <option data-countryId="621" value="621">+254, Kenya</option>
                        <option data-countryId="622" value="622">+686, Kiribati</option>
                        <option data-countryId="623" value="623">+82, Korea Democratic People&#39;s Republic Of</option>
                        <option data-countryId="624" value="624">+82, Korea Republic Of</option>
                        <option data-countryId="625" value="625">+383, Kosovo</option>
                        <option data-countryId="626" value="626">+965, Kuwait</option>
                        <option data-countryId="627" value="627">+996, Kyrgyzstan</option>
                        <option data-countryId="628" value="628">+856, Lao People&#39;s Democratic Republic</option>
                        <option data-countryId="629" value="629">+856, Laos</option>
                        <option data-countryId="630" value="630">+371, Latvia</option>
                        <option data-countryId="631" value="631">+961, Lebanon</option>
                        <option data-countryId="632" value="632">+266, Lesotho</option>
                        <option data-countryId="633" value="633">+231, Liberia</option>
                        <option data-countryId="634" value="634">+218, Libya</option>
                        <option data-countryId="635" value="635">+218, Libyan Arab Jamahiriya</option>
                        <option data-countryId="636" value="636">+423, Liechtenstein</option>
                        <option data-countryId="637" value="637">+370, Lithuania</option>
                        <option data-countryId="638" value="638">+352, Luxembourg</option>
                        <option data-countryId="639" value="639">+853, Macao</option>
                        <option data-countryId="640" value="640">+389, Macedonia</option>
                        <option data-countryId="641" value="641">+261, Madagascar</option>
                        <option data-countryId="642" value="642">+265, Malawi</option>
                        <option data-countryId="643" value="643">+60, Malaysia</option>
                        <option data-countryId="644" value="644">+960, Maldives</option>
                        <option data-countryId="645" value="645">+223, Mali</option>
                        <option data-countryId="646" value="646">+356, Malta</option>
                        <option data-countryId="647" value="647">+692, Marshall Islands</option>
                        <option data-countryId="648" value="648">+596, Martinique</option>
                        <option data-countryId="649" value="649">+222, Mauritania</option>
                        <option data-countryId="650" value="650">+230, Mauritius</option>
                        <option data-countryId="651" value="651">+262, Mayotte</option>
                        <option data-countryId="652" value="652">+52, Mexico</option>
                        <option data-countryId="653" value="653">+691, Micronesia</option>
                        <option data-countryId="654" value="654">+691, Micronesia Federated States Of</option>
                        <option data-countryId="655" value="655">+373, Moldova</option>
                        <option data-countryId="656" value="656">+377, Monaco</option>
                        <option data-countryId="657" value="657">+976, Mongolia</option>
                        <option data-countryId="658" value="658">+382, Montenegro</option>
                        <option data-countryId="659" value="659">+1-664, Montserrat</option>
                        <option data-countryId="660" value="660">+212, Morocco</option>
                        <option data-countryId="661" value="661">+258, Mozambique</option>
                        <option data-countryId="662" value="662">+95, Myanmar</option>
                        <option data-countryId="663" value="663">+264, Namibia</option>
                        <option data-countryId="664" value="664">+674, Nauru</option>
                        <option data-countryId="665" value="665">+977, Nepal</option>
                        <option data-countryId="666" value="666">+31, Netherlands</option>
                        <option data-countryId="667" value="667">+599, Netherlands Antilles</option>
                        <option data-countryId="668" value="668">+687, New Caledonia</option>
                        <option data-countryId="669" value="669">+64, New Zealand</option>
                        <option data-countryId="670" value="670">+505, Nicaragua</option>
                        <option data-countryId="671" value="671">+227, Niger</option>
                        <option data-countryId="672" value="672">+234, Nigeria</option>
                        <option data-countryId="673" value="673">+683, Niue</option>
                        <option data-countryId="674" value="674">+672, Norfolk Island</option>
                        <option data-countryId="675" value="675">+850, North Korea</option>
                        <option data-countryId="676" value="676">+1-670, Northern Mariana Islands</option>
                        <option data-countryId="677" value="677">+47, Norway</option>
                        <option data-countryId="678" value="678">+968, Oman</option>
                        <option data-countryId="679" value="679">+92, Pakistan</option>
                        <option data-countryId="680" value="680">+680, Palau</option>
                        <option data-countryId="681" value="681">+970, Palestine</option>
                        <option data-countryId="682" value="682">+275, Palestinian Territory Occupied</option>
                        <option data-countryId="683" value="683">+507, Panama</option>
                        <option data-countryId="684" value="684">+675, Papua New Guinea</option>
                        <option data-countryId="685" value="685">+595, Paraguay</option>
                        <option data-countryId="686" value="686">+51, Peru</option>
                        <option data-countryId="687" value="687">+63, Philippines</option>
                        <option data-countryId="688" value="688">+64, Pitcairn</option>
                        <option data-countryId="689" value="689">+48, Poland</option>
                        <option data-countryId="690" value="690">+351, Portugal</option>
                        <option data-countryId="691" value="691">+1-787, 1-939, Puerto Rico</option>
                        <option data-countryId="692" value="692">+974, Qatar</option>
                        <option data-countryId="693" value="693">+242, Republic of the Congo</option>
                        <option data-countryId="694" value="694">+262, Reunion</option>
                        <option data-countryId="695" value="695">+262, Réunion</option>
                        <option data-countryId="696" value="696">+40, Romania</option>
                        <option data-countryId="697" value="697">+7, Russia</option>
                        <option data-countryId="698" value="698">+7, Russian Federation</option>
                        <option data-countryId="699" value="699">+250, Rwanda</option>
                        <option data-countryId="700" value="700">+590, Saint Barthelemy</option>
                        <option data-countryId="701" value="701">+290, Saint Helena</option>
                        <option data-countryId="702" value="702">+1-869, Saint Kitts And Nevis</option>
                        <option data-countryId="703" value="703">+1-758, Saint Lucia</option>
                        <option data-countryId="704" value="704">+590, Saint Martin</option>
                        <option data-countryId="705" value="705">+508, Saint Pierre And Miquelon</option>
                        <option data-countryId="706" value="706">+1-784, Saint Vincent And The Grenadines</option>
                        <option data-countryId="707" value="707">+685, Samoa</option>
                        <option data-countryId="708" value="708">+378, San Marino</option>
                        <option data-countryId="709" value="709">+239, Sao Tome And Principe</option>
                        <option data-countryId="710" value="710">+966, Saudi Arabia</option>
                        <option data-countryId="711" value="711">+221, Senegal</option>
                        <option data-countryId="712" value="712">+381, Serbia</option>
                        <option data-countryId="713" value="713">+248, Seychelles</option>
                        <option data-countryId="714" value="714">+232, Sierra Leone</option>
                        <option data-countryId="715" value="715">+65, Singapore</option>
                        <option data-countryId="716" value="716">+1-721, Sint Maarten</option>
                        <option data-countryId="717" value="717">+421, Slovakia</option>
                        <option data-countryId="718" value="718">+386, Slovenia</option>
                        <option data-countryId="719" value="719">+677, Solomon Islands</option>
                        <option data-countryId="720" value="720">+252, Somalia</option>
                        <option data-countryId="721" value="721">+27, South Africa</option>
                        <option data-countryId="722" value="722">+500, South Georgia And The South Sandwich Islands
                        </option>
                        <option data-countryId="723" value="723">+82, South Korea</option>
                        <option data-countryId="724" value="724">+211, South Sudan</option>
                        <option data-countryId="725" value="725">+34, Spain</option>
                        <option data-countryId="726" value="726">+94, Sri Lanka</option>
                        <option data-countryId="727" value="727">+249, Sudan</option>
                        <option data-countryId="728" value="728">+597, Suriname</option>
                        <option data-countryId="729" value="729">+47, Svalbard And Jan Mayen</option>
                        <option data-countryId="730" value="730">+268, Swaziland</option>
                        <option data-countryId="731" value="731">+46, Sweden</option>
                        <option data-countryId="732" value="732">+41, Switzerland</option>
                        <option data-countryId="733" value="733">+963, Syria</option>
                        <option data-countryId="734" value="734">+963, Syrian Arab Republic</option>
                        <option data-countryId="735" value="735">+886, Taiwan</option>
                        <option data-countryId="736" value="736">+992, Tajikistan</option>
                        <option data-countryId="737" value="737">+255, Tanzania</option>
                        <option data-countryId="738" value="738">+255, Tanzania United Republic Of</option>
                        <option data-countryId="739" value="739">+66, Thailand</option>
                        <option data-countryId="740" value="740">+670, Timor-Leste</option>
                        <option data-countryId="741" value="741">+228, Togo</option>
                        <option data-countryId="742" value="742">+690, Tokelau</option>
                        <option data-countryId="743" value="743">+676, Tonga</option>
                        <option data-countryId="744" value="744">+1-868, Trinidad And Tobago</option>
                        <option data-countryId="745" value="745">+216, Tunisia</option>
                        <option data-countryId="746" value="746">+90, Turkey</option>
                        <option data-countryId="747" value="747">+993, Turkmenistan</option>
                        <option data-countryId="748" value="748">+1-649, Turks And Caicos Islands</option>
                        <option data-countryId="749" value="749">+688, Tuvalu</option>
                        <option data-countryId="750" value="750">+1-340, U.S. Virgin Islands</option>
                        <option data-countryId="751" value="751">+256, Uganda</option>
                        <option data-countryId="752" value="752">+380, Ukraine</option>
                        <option data-countryId="753" value="753">+971, United Arab Emirates</option>
                        <option data-countryId="754" value="754">+44, United Kingdom</option>
                        <option data-countryId="755" value="755">+1, United States</option>
                        <option data-countryId="756" value="756">+1, United States Minor Outlying Islands</option>
                        <option data-countryId="757" value="757">+598, Uruguay</option>
                        <option data-countryId="758" value="758">+998, Uzbekistan</option>
                        <option data-countryId="759" value="759">+678, Vanuatu</option>
                        <option data-countryId="760" value="760">+379, Vatican</option>
                        <option data-countryId="761" value="761">+58, Venezuela</option>
                        <option data-countryId="763" value="763">+84, Vietnam</option>
                        <option data-countryId="764" value="764">+1, Virgin Islands British</option>
                        <option data-countryId="765" value="765">+1, Virgin Islands U.S.</option>
                        <option data-countryId="766" value="766">+681, Wallis And Futuna</option>
                        <option data-countryId="767" value="767">+212, Western Sahara</option>
                        <option data-countryId="768" value="768">+967, Yemen</option>
                        <option data-countryId="769" value="769">+260, Zambia</option>
                        <option data-countryId="770" value="770">+263, Zimbabwe</option>
                        <option data-countryId="771" value="771">381, Yugoslavia</option>

                    </select>
                    <label for="phone">Phone Number:</label>
                    <input data-toggle="tooltip" data-placement="bottom" autocomplete="off" type="text" placeholder="&emsp;&emsp;&emsp;&emsp;&emsp;Enter Phone Number" title="Enter Phone Number" class="form-control phoneInput" id="mobileNumber" name="mobileNumber" maxlength="20" required>
                </div>
                <br>
                <div>
                    <label for="dob">Date of Birth:</label>
                    <input type="Date" name="DOB" id="dob" required>
                </div>
                <br>
                <div>
                    <label for="ms">Marital Status:</label>
                    <select name="m_status" id="ms" aria-label="ms" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Never Married">Never Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Annulled">Annulled</option>
                        <option value="Awaiting Divorce">Awaiting Divorce</option>
                    </select>

                    <label for="gender">Gender:</label>
                    <select name="gender" id="gender" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="bg">Blood Group:</label>
                    <select name="bg" id="bg" aria-label="bg" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="Don't Know">Don't Know</option>
                    </select>

                    <label for="mt">Mother Tongue:</label>
                    <select name="mt" id="mt" aria-label="mt" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="English">English</option>
                        <option value="Hindi">Hindi</option>
                        <option value="Bengali">Bengali</option>
                        <option value="Bihari">Bihari</option>
                        <option value="Bhojpuri">Bhojpuri</option>
                        <option value="Dogri">Dogri</option>
                        <option value="Telugu">Telugu</option>
                        <option value="Assamese">Assamese</option>
                        <option value="Marathi">Marathi</option>
                        <option value="Manipuri">Manipuri</option>
                        <option value="Marwari">Marwari</option>
                        <option value="Nepali">Nepali</option>
                        <option value="Tamil">Tamil</option>
                        <option value="Tripuri">Tripuri</option>
                        <option value="Tulu">Tulu</option>
                        <option value="Himachali">Himachali</option>
                        <option value="Haryanvi">Haryanvi</option>
                        <option value="Punjabi">Punjabi</option>
                        <option value="Gujarati">Gujarati</option>
                        <option value="Sanskrit">Sanskrit</option>
                        <option value="Sindhi">Sindhi</option>
                        <option value="Santhali">Santhali</option>
                        <option value="Kannada">Kannada</option>
                        <option value="Rajasthani">Rajasthani</option>
                        <option value="Urdu">Urdu</option>
                        <option value="Kashmiri">Kashmiri</option>
                        <option value="Khasi">Khasi</option>
                        <option value="Kutchi">Kutchi</option>
                        <option value="Odia">Odia</option>
                        <option value="Malayalam">Malayalam</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="religion">Religion:</label>
                    <select name="religion" id="religion" aria-label="religion" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Muslim">Muslim</option>
                        <option value="Christian">Christian</option>
                        <option value="Sikh">Sikh</option>
                        <option value="Jain">Jain</option>
                        <option value="Parsi">Parsi</option>
                        <option value="Buddhist">Buddhist</option>
                        <option value="Jewish">Jewish</option>
                        <option value="Inter-Religion">Inter-Religion</option>
                        <option value="No religious belief">No religious belief</option>
                    </select>

                    <label for="caste">Caste:</label>
                    <select name="caste" id="caste" aria-label="caste" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="General">General</option>
                        <option value="ST">ST</option>
                        <option value="SC">SC</option>
                        <option value="OBC">OBC</option>
                        <option value="Others">Others</option>
                        <option value="Don't wish to specify">Don't wish to specify</option>
                    </select>
                </div>
                <br>
            </fieldset>
            <br>

            <fieldset>
                <legend><b>Location <span class="red-text">*</span></b></legend><br>
                <div class="country">
                    <label for="country">Country:</label>
                    <select name="country" id="country" aria-label="country" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="23">Afghanistan</option>
                        <option value="3">Australia</option>
                        <option value="24">Bahrain</option>
                        <option value="27">Bangladesh</option>
                        <option value="28">Belgium</option>
                        <option value="34">Botswana</option>
                        <option value="13">Canada</option>
                        <option value="37">Chile</option>
                        <option value="40">China</option>
                        <option value="43">Cyprus</option>
                        <option value="44">Denmark</option>
                        <option value="47">Dominican Republic</option>
                        <option value="46">Fiji Islands</option>
                        <option value="52">France</option>
                        <option value="110">France</option>
                        <option value="55">Germany</option>
                        <option value="56">Greece</option>
                        <option value="57">Hong Kong</option>
                        <option value="60">Hungary</option>
                        <option value="India">India</option>
                        <option value="61">Indonesia</option>
                        <option value="62">Iran</option>
                        <option value="65">Ireland</option>
                        <option value="66">Israel</option>
                        <option value="69">Italy</option>
                        <option value="70">Japan</option>
                        <option value="73">Kenya</option>
                        <option value="20">Kuwait</option>
                        <option value="74">Malaysia</option>
                        <option value="77">Mexico</option>
                        <option value="79">Mexico</option>
                        <option value="78">Nepal</option>
                        <option value="81">Netherlands</option>
                        <option value="15">New Zealand</option>
                        <option value="82">Norway</option>
                        <option value="85">Oman</option>
                        <option value="2">Pakistan</option>
                        <option value="86">Philippines</option>
                        <option value="89">Poland</option>
                        <option value="90">Qatar</option>
                        <option value="95">Russia</option>
                        <option value="19">Saudi Arabia</option>
                        <option value="96">Singapore</option>
                        <option value="99">Spain</option>
                        <option value="100">Sri Lanka</option>
                        <option value="103">Sweden</option>
                        <option value="102">Switzerland</option>
                        <option value="107">Tanzania</option>
                        <option value="108">Thailand</option>
                        <option value="11">United Arab Emirates</option>
                        <option value="8">United Kingdom</option>
                        <option value="4">United States Of America</option>
                        <option value="5">USA</option>
                        <option value="109">Others</option>
                    </select>
                </div>
                <br>
                <div class="state">
                    <label for="state">State:</label>
                    <select name="state" id="state" aria-label="state" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Daman & Diu">Daman & Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujrat">Gujrat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerla">Kerla</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Maine">Maine</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalya">Meghalya</option>
                        <option value="Mijoram">Mijoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Panducherry">Panducherry</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>
                </div>
                <br>
                <div class="city">
                    <label for="city">City / District: </label>
                    <select name="city" id="city" aria-label="city">
                        <option value="" disabled selected>Select an option</option>
                        <option value="Abohar">Abohar</option>
                        <option value="Ada">Ada</option>
                        <option value="Adilabad">Adilabad</option>
                        <option value="Agartala">Agartala</option>
                        <option value="Agra">Agra</option>
                        <option value="Ahemedabad">Ahemedabad</option>
                        <option value="Ahemednagar">Ahemednagar</option>
                        <option value="379">Aizwal</option>
                        <option value="42">Aizwi</option>
                        <option value="10">Ajamgarh</option>
                        <option value="92">Ajitgarh</option>
                        <option value="428">Ajmer</option>
                        <option value="329">Akola</option>
                        <option value="315">Alappuzha</option>
                        <option value="21">Aligarh</option>
                        <option value="491">Alirajpur</option>
                        <option value="54">Allahabad</option>
                        <option value="467">Almora</option>
                        <option value="718">Altus</option>
                        <option value="429">Alwar</option>
                        <option value="330">Amarawati</option>
                        <option value="1">Ambala</option>
                        <option value="578">ambedkar nagar</option>
                        <option value="221">Amreli</option>
                        <option value="77">Amritsar</option>
                        <option value="222">Anand</option>
                        <option value="248">Anantnag</option>
                        <option value="108">Anantpur</option>
                        <option value="398">Angul</option>
                        <option value="128">Anjaw</option>
                        <option value="519">Anuppur</option>
                        <option value="755">Any</option>
                        <option value="19">Araria</option>
                        <option value="713">Ardmore</option>
                        <option value="527">Ariyalpur</option>
                        <option value="70">Arwal</option>
                        <option value="486">Ashok nagar</option>
                        <option value="579">Auraiya</option>
                        <option value="170">Aurangabad</option>
                        <option value="331">Aurangabad</option>
                        <option value="671">Avikanagar</option>
                        <option value="569">Badaun</option>
                        <option value="249">Badgam</option>
                        <option value="468">Bageshwar</option>
                        <option value="666">Bahadurgarh </option>
                        <option value="581">Bahraich</option>
                        <option value="144">Baksa</option>
                        <option value="499">Balaghat</option>
                        <option value="401">Balangir</option>
                        <option value="403">Balasore</option>
                        <option value="567">Ballia</option>
                        <option value="584">Balrampur</option>
                        <option value="223">Banaskantha</option>
                        <option value="576">Banda</option>
                        <option value="250">bandipore</option>
                        <option value="286">Bangalkot</option>
                        <option value="669">Bangalore</option>
                        <option value="36">Banglore</option>
                        <option value="288">Banglore rural</option>
                        <option value="287">Banglore urban</option>
                        <option value="171">Banka</option>
                        <option value="630">Bankura</option>
                        <option value="430">Banswara</option>
                        <option value="580">Barabanki</option>
                        <option value="251">Baramula</option>
                        <option value="431">Baran</option>
                        <option value="673">Barapani</option>
                        <option value="631">Bardhaman</option>
                        <option value="570">Bareilly</option>
                        <option value="402">Bargarh</option>
                        <option value="432">Barmer</option>
                        <option value="78">Barnala</option>
                        <option value="667">Baroda</option>
                        <option value="145">Barpeta</option>
                        <option value="672">Barrackpore</option>
                        <option value="709">Bartlesville</option>
                        <option value="492">Barwani</option>
                        <option value="204">Bastar</option>
                        <option value="573">Basti</option>
                        <option value="747">Batala</option>
                        <option value="79">Bathinda</option>
                        <option value="332">Beed</option>
                        <option value="172">Begusarai</option>
                        <option value="289">Belgaum</option>
                        <option value="290">Bellary</option>
                        <option value="719">Bethany</option>
                        <option value="400">Bhadrak</option>
                        <option value="678">Bhadravati</option>
                        <option value="173">Bhagalpur</option>
                        <option value="333">Bhandara</option>
                        <option value="433">Bharatpur</option>
                        <option value="224">Bharuch</option>
                        <option value="51">Bhatinda</option>
                        <option value="225">Bhavnagar</option>
                        <option value="675">Bhilai</option>
                        <option value="434">Bhilwara</option>
                        <option value="485">Bhind</option>
                        <option value="18">Bhiwani</option>
                        <option value="174">Bhojpur</option>
                        <option value="38">Bhopal</option>
                        <option value="662">Bhopal</option>
                        <option value="44">Bhubaneshwar</option>
                        <option value="291"> Bidar</option>
                        <option value="205">Bijapur</option>
                        <option value="582">Bijnor</option>
                        <option value="435">Bikaner</option>
                        <option value="96">Bilaspur</option>
                        <option value="206">Bilaspur</option>
                        <option value="632">Birbhum</option>
                        <option value="363">bishnupur</option>
                        <option value="716">Bixby</option>
                        <option value="263">Bokaro</option>
                        <option value="146">Bongaigaon</option>
                        <option value="399">Boudh</option>
                        <option value="11">Brailly</option>
                        <option value="701">Broken Arrow</option>
                        <option value="585">Bulandshahr</option>
                        <option value="334">Buldhana</option>
                        <option value="436">Bundi</option>
                        <option value="493">Burhanpur</option>
                        <option value="677">Burnpur</option>
                        <option value="175">Buxar</option>
                        <option value="147">Cachar</option>
                        <option value="648">Central delhi</option>
                        <option value="292">Chamarajanagar</option>
                        <option value="97">Chamba</option>
                        <option value="469">Chamoli</option>
                        <option value="470">champawat</option>
                        <option value="380">Champhai</option>
                        <option value="586">Chandauli</option>
                        <option value="365">Chandel</option>
                        <option value="9">chandigarh</option>
                        <option value="335">Chandrapur</option>
                        <option value="129">Changlang</option>
                        <option value="47">Channai</option>
                        <option value="264">Chatra</option>
                        <option value="24">Cheerpulsury</option>
                        <option value="528">Chennai</option>
                        <option value="514">Chhatrapur</option>
                        <option value="729">Chickasha</option>
                        <option value="293">Chikballapur</option>
                        <option value="294">Chikmagalur</option>
                        <option value="501">Chindwara</option>
                        <option value="148">Chirang</option>
                        <option value="295">Chitradurga</option>
                        <option value="577">Chitrakoot</option>
                        <option value="109">chittoor</option>
                        <option value="437">Chittorgarh</option>
                        <option value="735">Choctaw</option>
                        <option value="364">Churachandpur</option>
                        <option value="438">Churu</option>
                        <option value="721">Claremore </option>
                        <option value="663">Cochin</option>
                        <option value="529">Coimbatore</option>
                        <option value="633">Cooch Behar</option>
                        <option value="740">Coweta</option>
                        <option value="530">Cuddalore</option>
                        <option value="404">Cuttack</option>
                        <option value="226">Dahod</option>
                        <option value="296">Dakshina kannada</option>
                        <option value="659">Daman</option>
                        <option value="515">Damoh</option>
                        <option value="207">Dantewada</option>
                        <option value="176">Darbhanga</option>
                        <option value="Darjeeling">Darjeeling</option>
                        <option value="149">Darrang</option>
                        <option value="488">Datia</option>
                        <option value="439">Dausa</option>
                        <option value="297">Davanagere</option>
                        <option value="405">Debagarh</option>
                        <option value="717">Del City</option>
                        <option value="Delhi">Delhi</option>
                        <option value="265">Deoghar</option>
                        <option value="587">Deoria</option>
                        <option value="522">Dewas</option>
                        <option value="463">Dhalai</option>
                        <option value="208">Dhamteri</option>
                        <option value="266">Dhanbad</option>
                        <option value="494">Dhar</option>
                        <option value="531">Dharmapuri</option>
                        <option value="298">Dharwad</option>
                        <option value="150">dhemaji</option>
                        <option value="406">Dhenkanal</option>
                        <option value="49">Dheradun</option>
                        <option value="440">Dholpur</option>
                        <option value="152">Dhubri</option>
                        <option value="336">Dhule</option>
                        <option value="139">Dibang valley</option>
                        <option value="153">Dibrugarh</option>
                        <option value="151">Dima hasao</option>
                        <option value="387">Dimapur</option>
                        <option value="532">Dindigul</option>
                        <option value="520">Dindori</option>
                        <option value="28">Dispur</option>
                        <option value="252">Doda</option>
                        <option value="267">Dumka</option>
                        <option value="715">Duncan</option>
                        <option value="441">Dungarpur</option>
                        <option value="727">Durant</option>
                        <option value="209">Durg</option>
                        <option value="Durgapur">Durgapur</option>
                        <option value="177">East champran</option>
                        <option value="652">East Delhi</option>
                        <option value="372">East garo hills</option>
                        <option value="110">East godavari</option>
                        <option value="131">East kameng</option>
                        <option value="373">East khasi hills</option>
                        <option value="635">East Midnapur</option>
                        <option value="130">East siang</option>
                        <option value="459">East sikkim</option>
                        <option value="278">East singbhum</option>
                        <option value="703">Edmond</option>
                        <option value="725">El Reno</option>
                        <option value="733">Elk City</option>
                        <option value="57">Eluru</option>
                        <option value="706">Enid</option>
                        <option value="316">Ernakulam</option>
                        <option value="533">Erode</option>
                        <option value="588">Etawah</option>
                        <option value="562">Etha</option>
                        <option value="Faizabad">Faizabad</option>
                        <option value="Faridabad">Faridabad</option>
                        <option value="80">Faridkot</option>
                        <option value="589">Farrukhabad</option>
                        <option value="52">Fatehpur</option>
                        <option value="67">Fathabad</option>
                        <option value="81">Fathegarh sahib</option>
                        <option value="82">Fazilks</option>
                        <option value="559">Firojabad</option>
                        <option value="83">Firozpur</option>
                        <option value="299">Gadag</option>
                        <option value="337">Gadchiroli</option>
                        <option value="408">Gajapati</option>
                        <option value="692">Ganderbal</option>
                        <option value="32">Gandhi nagar</option>
                        <option value="681">Gandhidham</option>
                        <option value="46">Gangtok</option>
                        <option value="407">Ganjam</option>
                        <option value="269">Garhwa</option>
                        <option value="591">Gautam buddha nagar</option>
                        <option value="Gaya">Gaya</option>
                        <option value="Ghaziabad">Ghaziabad</option>
                        <option value="Ghazipur">Ghazipur</option>
                        <option value="270">Giridih</option>
                        <option value="736">Glenpool</option>
                        <option value="154">Goalpara</option>
                        <option value="271">Godda</option>
                        <option value="689">Golaghat </option>
                        <option value="592">Gonda</option>
                        <option value="338">Gondia</option>
                        <option value="179">Gopalganj</option>
                        <option value="594">Gorkakhpur</option>
                        <option value="300">Gulbarga</option>
                        <option value="272">Gumla</option>
                        <option value="489">Guna</option>
                        <option value="69">Guntur</option>
                        <option value="84">Gurdaspur</option>
                        <option value="58">Gurgaon</option>
                        <option value="738">Guthrie</option>
                        <option value="628">Guwahati</option>
                        <option value="734">Guymon</option>
                        <option value="490">Gwalior</option>
                        <option value="155">Hailakandi</option>
                        <option value="98">Hamirpur</option>
                        <option value="596">hamirpur</option>
                        <option value="74">Hanumangarh</option>
                        <option value="626">Hapur</option>
                        <option value="507">Harda</option>
                        <option value="597">Hardoi</option>
                        <option value="471">Haridwar</option>
                        <option value="301">Hassan</option>
                        <option value="563">Hathras</option>
                        <option value="302">Haveri</option>
                        <option value="273">Hazaribag</option>
                        <option value="339">Hingoli</option>
                        <option value="13">Hisar</option>
                        <option value="61">Hissar</option>
                        <option value="Hooghly">Hooghly</option>
                        <option value="508">Hosangabad</option>
                        <option value="85">Hoshiarpur</option>
                        <option value="Howrah">Howrah</option>
                        <option value="683">Hubli</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="317">Idukki</option>
                        <option value="Imphal">Imphal</option>
                        <option value="366">Imphal east</option>
                        <option value="371">Imphal west</option>
                        <option value="Indore">Indore</option>
                        <option value="27">Itanagar</option>
                        <option value="670">Izatnagar</option>
                        <option value="Jabalpur">Jabalpur</option>
                        <option value="411">Jagatsinghpur</option>
                        <option value="374">Jaintia hills</option>
                        <option value="Jaipur">Jaipur</option>
                        <option value="442">Jaisalmer</option>
                        <option value="410">Jajapur</option>
                        <option value="86">Jalandher</option>
                        <option value="340">Jalgaon</option>
                        <option value="341">Jalna</option>
                        <option value="443">Jalor</option>
                        <option value="638">Jalpaiguri</option>
                        <option value="253">Jammu</option>
                        <option value="228">Jamnagar</option>
                        <option value="Jamshedpur">Jamshedpur</option>
                        <option value="281">Jamtara</option>
                        <option value="180">Jamui</option>
                        <option value="211">Janjgir champa</option>
                        <option value="210">Jashpur</option>
                        <option value="601">Jaunpur</option>
                        <option value="181">Jehanabad</option>
                        <option value="724">Jenks</option>
                        <option value="496">Jhabua</option>
                        <option value="56">Jhajjar</option>
                        <option value="75">Jhalandher</option>
                        <option value="444">Jhalawar</option>
                        <option value="599">Jhansi</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="409">Jharsuguda</option>
                        <option value="445">Jhunjhunu</option>
                        <option value="12">Jind</option>
                        <option value="Jodhpur">Jodhpur</option>
                        <option value="156">Jorhat</option>
                        <option value="229">Junagadh</option>
                        <option value="600">Jyotiba phule nagar</option>
                        <option value="682"> Kachchh</option>
                        <option value="215">Kabirdham</option>
                        <option value="111">Kadapa</option>
                        <option value="182">Kaimur</option>
                        <option value="66">kaithal</option>
                        <option value="414">Kalahandi</option>
                        <option value="686">Kalpakkam</option>
                        <option value="157">Kamrup</option>
                        <option value="158">Kamrup metropolitan</option>
                        <option value="534">Kanchipuram</option>
                        <option value="415">Kandhamal</option>
                        <option value="99">Kangra</option>
                        <option value="603">kannauj</option>
                        <option value="535">Kanniyakumari</option>
                        <option value="318">Kannur</option>
                        <option value="Kanpur">Kanpur</option>
                        <option value="604">Kanpur nagar</option>
                        <option value="87">Kapurthala</option>
                        <option value="447">Karauli</option>
                        <option value="159">Karbi anglong</option>
                        <option value="254">Kargil</option>
                        <option value="160">Karimgang</option>
                        <option value="112">Karimnagar</option>
                        <option value="63">Karnal</option>
                        <option value="536">Karur</option>
                        <option value="319">Kasaragod</option>
                        <option value="564">Kasganj</option>
                        <option value="255">Kathua</option>
                        <option value="183">Katihar</option>
                        <option value="502">Katni</option>
                        <option value="565">Kaushambi</option>
                        <option value="660">Kavaratti</option>
                        <option value="417">Kendrapara</option>
                        <option value="413">Kendurjhar</option>
                        <option value="214">Kenkar</option>
                        <option value="184">Khagaria</option>
                        <option value="113">Khammam</option>
                        <option value="497">Khandwa</option>
                        <option value="748">Khanna</option>
                        <option value="498">Khargoan</option>
                        <option value="231">Kheda</option>
                        <option value="412">Khordha</option>
                        <option value="284">Khunti</option>
                        <option value="100">Kinnaur</option>
                        <option value="388">kiphire</option>
                        <option value="185">Kisanganj</option>
                        <option value="693">Kishtwar</option>
                        <option value="303">Kodagu</option>
                        <option value="389">Koh</option>
                        <option value="43">Kohima</option>
                        <option value="161">Kokrajhar</option>
                        <option value="304">Kolar</option>
                        <option value="381">Kolasib</option>
                        <option value="Kolhapur">Kolhapur</option>
                        <option value="Kolkata">Kolkata</option>
                        <option value="320">Kollam</option>
                        <option value="305">koppal</option>
                        <option value="416">Koraput</option>
                        <option value="212">Korba</option>
                        <option value="213">Koriya</option>
                        <option value="448">Kota</option>
                        <option value="321">Kottayam</option>
                        <option value="322">Kozhikode</option>
                        <option value="114">Krishna</option>
                        <option value="537">Krishnagiri</option>
                        <option value="694">Kulgam</option>
                        <option value="101">kullu</option>
                        <option value="256">kupwada</option>
                        <option value="115">Kurnool</option>
                        <option value="Kurukshetra">Kurukshetra</option>
                        <option value="132">Kurung kumey</option>
                        <option value="605">Kushinagar</option>
                        <option value="230">Kutch</option>
                        <option value="102">Lahaul & spiti</option>
                        <option value="162">Lakhimpur</option>
                        <option value="607">Lakhimpur kheri</option>
                        <option value="186">Lakhisarai</option>
                        <option value="606">Lalitpur</option>
                        <option value="277">Latehar</option>
                        <option value="343">Latur</option>
                        <option value="382">Lawngtlai</option>
                        <option value="702">Lawton</option>
                        <option value="257">Leh</option>
                        <option value="274">Lohardaga</option>
                        <option value="133">Lohit</option>
                        <option value="390">longleng</option>
                        <option value="134">Lower dibang valley</option>
                        <option value="135">Lower subansiri</option>
                        <option value="Lucknow">Lucknow</option>
                        <option value="59">Ludhiana</option>
                        <option value="383">Lunglei</option>
                        <option value="187">Madhepura</option>
                        <option value="188">Madhubani</option>
                        <option value="538">Madurai</option>
                        <option value="598">Mahamaya nagar</option>
                        <option value="610">Maharajganj</option>
                        <option value="216">Mahasamund</option>
                        <option value="116">Mahbubnagar</option>
                        <option value="55">Mahendergarh</option>
                        <option value="611">Mahoba</option>
                        <option value="560">Mainpuri</option>
                        <option value="323">Malappuram</option>
                        <option value="Maldah">Maldah</option>
                        <option value="749">Malerkotla</option>
                        <option value="629">maligaon</option>
                        <option value="418">Malkangiri</option>
                        <option value="744">malout</option>
                        <option value="384">Mamit</option>
                        <option value="103">Mandi</option>
                        <option value="503">Mandla</option>
                        <option value="523">Mandsaur</option>
                        <option value="306">Mandya</option>
                        <option value="Mangalore">Mangalore</option>
                        <option value="691">Manipal</option>
                        <option value="72">Mansa</option>
                        <option value="163">Marigaon</option>
                        <option value="561">mathura</option>
                        <option value="568">Mau</option>
                        <option value="419">Mayurbhanj</option>
                        <option value="723">McAlester</option>
                        <option value="117">Medak</option>
                        <option value="232">Mehsana</option>
                        <option value="609">Merrut</option>
                        <option value="62">Mewat</option>
                        <option value="730">Miami</option>
                        <option value="705">Midwest City</option>
                        <option value="612">Mirjapur</option>
                        <option value="Mohali">Mohali</option>
                        <option value="391">Mokokchung</option>
                        <option value="392">Mon</option>
                        <option value="704">Moore</option>
                        <option value="613">Moradabad</option>
                        <option value="483">Morena</option>
                        <option value="22">Motihari</option>
                        <option value="20">Mujjafurpur</option>
                        <option value="88">Mukatsar</option>
                        <option value="745">Muktsar</option>
                        <option value="746">Muktsar</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="344">Mumbai city</option>
                        <option value="345">mumbai subarban </option>
                        <option value="189">Mungar</option>
                        <option value="190">munger</option>
                        <option value="53">Muradabad</option>
                        <option value="Murshidabad">Murshidabad</option>
                        <option value="708">Muskogee</option>
                        <option value="Mussoorie">Mussoorie</option>
                        <option value="722">Mustang</option>
                        <option value="614">Muzaffarnagar</option>
                        <option value="Mysore">Mysore</option>
                        <option value="420">Nabarangpur</option>
                        <option value="Nadia">Nadia</option>
                        <option value="164">Nagaon</option>
                        <option value="539">Nagapattinam</option>
                        <option value="449">Nagaur</option>
                        <option value="Nagpur">Nagpur</option>
                        <option value="472">Nainital</option>
                        <option value="191">Nalanda</option>
                        <option value="165">Nalbari</option>
                        <option value="118">Nalgonda</option>
                        <option value="347">Nanded</option>
                        <option value="348">Nandurbar</option>
                        <option value="217">Narayanpur</option>
                        <option value="233">Narmada</option>
                        <option value="506">Narmadapuram</option>
                        <option value="64">Narnaul</option>
                        <option value="741">Narnaul </option>
                        <option value="742">Narnaul</option>
                        <option value="504">Narsinghpur</option>
                        <option value="349">Nashik</option>
                        <option value="234">Navsari</option>
                        <option value="192">Nawada</option>
                        <option value="751">Nawan Shehar</option>
                        <option value="752">Nawan Shehar</option>
                        <option value="422">Nayagarh</option>
                        <option value="119">Nellore</option>
                        <option value="New Delhi">New Delhi</option>
                        <option value="540">Nilgiris</option>
                        <option value="120">Nizamabad</option>
                        <option value="Noida">Noida</option>
                        <option value="700">Norman</option>
                        <option value="North 24 parganas">North 24 parganas</option>
                        <option value="649">North Delhi</option>
                        <option value="643">North Dinajpur</option>
                        <option value="246">north goa</option>
                        <option value="462">North sikkim</option>
                        <option value="464">north tripura</option>
                        <option value="653">North-East Delhi</option>
                        <option value="654">North-West Delhi</option>
                        <option value="421">Nuapada</option>
                        <option value="698">Oklahoma City</option>
                        <option value="731">Okmulgee</option>
                        <option value="350">Osmanabad</option>
                        <option value="710">Owasso</option>
                        <option value="542">Padukkottai</option>
                        <option value="283">Pakur</option>
                        <option value="324">Palakkad</option>
                        <option value="276">Palamu</option>
                        <option value="450">Pali</option>
                        <option value="76">palwal</option>
                        <option value="16">Panchkula</option>
                        <option value="Panducherry">Panducherry</option>
                        <option value="3">Panipat</option>
                        <option value="31">Panji</option>
                        <option value="516">Panna</option>
                        <option value="136">Papum pare</option>
                        <option value="351">Parbhani</option>
                        <option value="235">Patan</option>
                        <option value="325">Pathanamthitta</option>
                        <option value="90">Pathankot</option>
                        <option value="89">Patiala</option>
                        <option value="Patna">Patna</option>
                        <option value="627">Pauri</option>
                        <option value="473">Pauri gharwal</option>
                        <option value="541">Perambalur</option>
                        <option value="393">Peren</option>
                        <option value="394">Phek</option>
                        <option value="571">Pilibhit</option>
                        <option value="474">Pithoragarh</option>
                        <option value="712">Ponca City</option>
                        <option value="Poonch">Poonch</option>
                        <option value="237">Porbandar</option>
                        <option value="657">port blair</option>
                        <option value="121">Prakasam</option>
                        <option value="451">Pratapgarh</option>
                        <option value="566">Pratapgarh</option>
                        <option value="259">Pulwama</option>
                        <option value="236">Punchmahal</option>
                        <option value="Pune">Pune</option>
                        <option value="Puri">Puri</option>
                        <option value="193">Purnia</option>
                        <option value="Purulia">Purulia</option>
                        <option value="616">Rai barelli</option>
                        <option value="308">Raichur</option>
                        <option value="218">Raigarh</option>
                        <option value="353">Raigarh</option>
                        <option value="Raipur">Raipur</option>
                        <option value="479">Raisen</option>
                        <option value="674">Rajahmundry</option>
                        <option value="260">Rajauri</option>
                        <option value="480">Rajgarh</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="219">Rajnandgaon</option>
                        <option value="743">Rajpura</option>
                        <option value="452">Rajsamand</option>
                        <option value="309">Ramanagara</option>
                        <option value="543">Ramanathapuram</option>
                        <option value="695">Ramban</option>
                        <option value="285">Ramgarh</option>
                        <option value="615">Rampur</option>
                        <option value="Ranchi">Ranchi</option>
                        <option value="122">Rangareddy</option>
                        <option value="524">Ratlam</option>
                        <option value="354">Ratnagiri</option>
                        <option value="424">Rayagada</option>
                        <option value="375">Re-bhoi</option>
                        <option value="696">Reasi</option>
                        <option value="509">Rewa</option>
                        <option value="15">Rewadi</option>
                        <option value="14">Rohtak</option>
                        <option value="194">Rohtas</option>
                        <option value="685">Ropar</option>
                        <option value="Rourkela">Rourkela</option>
                        <option value="475">Rudra prayag</option>
                        <option value="91">Rupnagar</option>
                        <option value="239">Sabarkantha</option>
                        <option value="513">Sagar</option>
                        <option value="617">Saharanpur</option>
                        <option value="195">Saharsa</option>
                        <option value="Sahebganj">Sahebganj</option>
                        <option value="665">Sahibabad</option>
                        <option value="385">Saiha</option>
                        <option value="544">Salem</option>
                        <option value="4">Samanabad</option>
                        <option value="196">Samastipur</option>
                        <option value="Sambalpur">Sambalpur</option>
                        <option value="261">Sambha</option>
                        <option value="583">Sambhal</option>
                        <option value="720">Sand Springs</option>
                        <option value="355">Sangli</option>
                        <option value="93">Sangrur</option>
                        <option value="574">Sant kabir nagar</option>
                        <option value="621">Sant ravidas nagar</option>
                        <option value="279">Saraikela kharsawan</option>
                        <option value="197">Saran</option>
                        <option value="684">Sarhind</option>
                        <option value="623">Sarsvati</option>
                        <option value="356">Satara</option>
                        <option value="510">Satna</option>
                        <option value="453">Sawai madhopur</option>
                        <option value="680">Secundrabad</option>
                        <option value="481">Sehore</option>
                        <option value="367">Senapati</option>
                        <option value="505">Seoni</option>
                        <option value="386">Serchhip</option>
                        <option value="518">Shahdol</option>
                        <option value="94">Shahid bhagat singh nagar</option>
                        <option value="572">Shahjahapur</option>
                        <option value="525">shajhapur</option>
                        <option value="619">Shamli</option>
                        <option value="711">Shawnee</option>
                        <option value="198">Sheikhpura</option>
                        <option value="199">Sheohar</option>
                        <option value="484">Sheopur</option>
                        <option value="Shilong">Shilong</option>
                        <option value="Shimla">Shimla</option>
                        <option value="310">Shimoga</option>
                        <option value="487">Shivpuri</option>
                        <option value="697">Shopian</option>
                        <option value="166">Sibsagar</option>
                        <option value="575">Siddharthnagar</option>
                        <option value="511">Sidhi</option>
                        <option value="454">Sikar</option>
                        <option value="658">Silvassa</option>
                        <option value="275">Simdega</option>
                        <option value="357">Sindhudurg</option>
                        <option value="512">singrauli</option>
                        <option value="104">sirmaur</option>
                        <option value="455">Sirohi</option>
                        <option value="71">Sirsa</option>
                        <option value="200">Sitamarhi</option>
                        <option value="618">Sitapur</option>
                        <option value="545">Sivaganga</option>
                        <option value="23">Siwan</option>
                        <option value="105">Solan</option>
                        <option value="358">Solapur</option>
                        <option value="620">Sonbhadra</option>
                        <option value="25">Sonipat</option>
                        <option value="167">Sonitpur</option>
                        <option value="South 24 Paraganas">South 24 Paraganas</option>
                        <option value="651">South Delhi</option>
                        <option value="646">South Dinajpur</option>
                        <option value="376">South garo hills</option>
                        <option value="247">South goa</option>
                        <option value="461">South sikkim</option>
                        <option value="465">South tripura</option>
                        <option value="656">South-West Delhi</option>
                        <option value="456">Sri ganganagar</option>
                        <option value="34">Sri nagar</option>
                        <option value="123">Srikakulam,</option>
                        <option value="707">Stillwater</option>
                        <option value="426">Subarnapur</option>
                        <option value="Sultanpur">Sultanpur</option>
                        <option value="427">Sundergarh</option>
                        <option value="240">Sunrendranagar</option>
                        <option value="201">Supal</option>
                        <option value="Surat">Surat</option>
                        <option value="241">Surendranagar</option>
                        <option value="220">surguja</option>
                        <option value="728">Tahlequah</option>
                        <option value="750">Talwara</option>
                        <option value="368">Tamanglong</option>
                        <option value="Tamilnadu">Tamilnadu</option>
                        <option value="243">Tapi</option>
                        <option value="95">Tarn taran sahib</option>
                        <option value="137">Tawang</option>
                        <option value="476">Tehri gharwal</option>
                        <option value="687">Tezpur</option>
                        <option value="359">Thane</option>
                        <option value="546">Thanjavur</option>
                        <option value="227">The dang</option>
                        <option value="547">Theni</option>
                        <option value="552">Thiruvallur</option>
                        <option value="37">Thiruvananthapuram</option>
                        <option value="549">Thiruvarur</option>
                        <option value="548">Thoothukudi</option>
                        <option value="369">Thoubal</option>
                        <option value="326">Thrissur</option>
                        <option value="517">Tikamgarh</option>
                        <option value="168">Tinsukia</option>
                        <option value="138">Tirap</option>
                        <option value="551">Tiruchhirapalli</option>
                        <option value="550">Tirunelveli</option>
                        <option value="553">Tiruppur</option>
                        <option value="554">Tiruvannamalai</option>
                        <option value="457">Tonk</option>
                        <option value="395">Tuensang</option>
                        <option value="699">Tulsa</option>
                        <option value="311">Tumkur</option>
                        <option value="458">Udaipur</option>
                        <option value="169">Udalguri</option>
                        <option value="477">Udham singh nagar</option>
                        <option value="262">Udhampur</option>
                        <option value="312">Udupi</option>
                        <option value="526">Ujjain</option>
                        <option value="370">Ukhrul</option>
                        <option value="521">Umaria</option>
                        <option value="106">Una</option>
                        <option value="624">Unnao</option>
                        <option value="140">Upper siang</option>
                        <option value="141">Upper subansiri</option>
                        <option value="313">Uttarakanda</option>
                        <option value="478">Uttarkashi</option>
                        <option value="Vadodra">Vadodra</option>
                        <option value="202">Vaishali</option>
                        <option value="245">Valsad</option>
                        <option value="Varanasi">Varanasi</option>
                        <option value="Vellore">Vellore</option>
                        <option value="482">Vidisha</option>
                        <option value="556">Villupuram</option>
                        <option value="557">Virudhunagar</option>
                        <option value="124">Vishakhapatnam</option>
                        <option value="125">Vizianagaram</option>
                        <option value="Warangal">Warangal</option>
                        <option value="360">wardha</option>
                        <option value="739">Warr Acres</option>
                        <option value="361">Washim</option>
                        <option value="327">Wayanad</option>
                        <option value="737">Weatherford</option>
                        <option value="203">West champaran</option>
                        <option value="650">West Delhi</option>
                        <option value="377">West garo hills</option>
                        <option value="127">West godavari</option>
                        <option value="142">West kameng</option>
                        <option value="378">West khasi hill</option>
                        <option value="West midnapore">West midnapore</option>
                        <option value="143">West siang</option>
                        <option value="460">West sikkim</option>
                        <option value="280">West singbhum</option>
                        <option value="466">West tripura</option>
                        <option value="396">Wokha</option>
                        <option value="732">Woodward</option>
                        <option value="Yadgir">Yadgir</option>
                        <option value="6">Yamunanagar</option>
                        <option value="362">Yavatmal</option>
                        <option value="714">Yukon</option>
                        <option value="Zirakpur">Zirakpur</option>
                        <option value="397">Zunheboto</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="pin">Pincode: </label>
                    <input type="int" name="pin" id="pin" placeholder="&emsp;&emsp;&emsp;&emsp;Postal Code or ZIP Code" required>
                </div>
                <br>
            </fieldset>
            <br>

            <fieldset>
                <legend><b>Disability Details <span class="red-text">*</span></b></legend><br>
                <div>
                    <label>Disability Type: </label>
                    <select name="disability_type" id="disability_type" aria-label="disability_type" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Visually Handicapped">Visually Handicapped</option>
                        <option value="Locomotor Disability">Locomotor Disability</option>
                        <option value="Deaf & Dumb">Deaf & Dumb</option>
                        <option value="Mental Illness">Mental Illness</option>
                        <option value="Dwarfism">Dwarfism</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <br>
                <div>
                    <label>Disability (%): </label>
                    <select name="disability_percent" id="disability_percent" aria-label="disability_percent" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Less Than 10%">Less Than 10%</option>
                        <option value="Less Than 20%">Less Than 20%</option>
                        <option value="Less Than 30%">Less Than 30%</option>
                        <option value="Less Than 40%">Less Than 40%</option>
                        <option value="Less Than 50%">Less Than 50%</option>
                        <option value="Less Than 60%">Less Than 60%</option>
                        <option value="More Than 60%">More Than 60%</option>
                        <option value="100%">100%</option>
                    </select>
                </div>
                <br>
            </fieldset>
            <br>

            <fieldset>
                <legend><b>Professional Details</b></legend><br>
                <div>
                    <label for="qua">Qualification: <span class="red-text">*</span></label>
                    <select name="qualification" id="qua" aria-label="qua" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="High-school">High School</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Bachelor's Degree">Bachelor's Degree</option>
                        <option value="Master's Degree">Master's Degree</option>
                        <option value="Phd">PhD</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="profession">Select Profession: <span class="red-text">*</span></label>
                    <select name="profession" id="profession" aria-label="prof">
                        <option value="" disabled selected>Select an option</option>
                        <option value="Businessman">Businessman</option>
                        <option value="Civil Servant">Civil Servant</option>
                        <option value="Designer">Designer</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Engineer">Engineer</option>
                        <option value="Farmer">Farmer</option>
                        <option value="Govt. Employee">Govt. Employee</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Lawyer">Lawyer</option>
                        <option value="Sportsman">Sportsman</option>
                        <option value="Student">Student</option>
                        <option value="Politician">Politician</option>
                        <option value="Any private sector">Any private sector</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="income">Annual Income: </label>
                    <select id="income" name="income">
                        <option value="" disabled selected>Select an option</option>
                        <option value="Below 60K">Below 60,000</option>
                        <option value="60K-1.5L">60,000 - 1.5 Lakh</option>
                        <option value="1.5L-3L">1.5 Lakh - 3 Lakh</option>
                        <option value="3L-6L">3 Lakh - 6 Lakh</option>
                        <option value="6L-10L">6 Lakh - 10 Lakh</option>
                        <option value="Above 10L">Above 10 Lakh</option>
                    </select>
                </div>
                <br>
            </fieldset>
            <br>

            <fieldset>
                <legend><b>Basic Information</b></legend><br>
                <div>
                    <label for="area">Area / Village / Sub-Division: <span class="red-text">*</span></label>
                    <input type="text" name="area" id="area" placeholder="&emsp;&emsp;&emsp;&emsp;&emsp;Nearest Landmark" required>
                </div>
                <br>
                <div>
                    <label for="diet">Diet: </label>
                    <select id="diet" name="diet">
                        <option value="" disabled selected>Select an option</option>
                        <option value="Vegetarian">Vegetarian</option>
                        <option value="Semi-vegetarian">Semi-vegetarian (includes fish and seafood)</option>
                        <option value="Non-Vegetarian">Non-Vegetarian</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="smoke">Smoke: <span class="red-text">*</span></label>
                    <label>
                        <input type="radio" name="choice1" value="Yes" style="display: inline-block; width: 16px; height: 16px; border: 1px solid #000000; cursor: pointer;">
                        YES
                    </label>
                    <label>
                        <input type="radio" name="choice1" value="No" style="display: inline-block; width: 16px; height: 16px; border: 1px solid #000000; cursor: pointer;">
                        NO
                    </label>
                </div>
                <br>
                <div class="drink">
                    <label for="drink">Drink: <span class="red-text">*</span></label>
                    <label>
                        <input type="radio" name="choice2" value="Yes" style="display: inline-block; width: 16px; height: 16px; border: 1px solid #000000; cursor: pointer;">
                        YES
                    </label>
                    <label>
                        <input type="radio" name="choice2" value="No" style="display: inline-block; width: 16px; height: 16px; border: 1px solid #000000; cursor: pointer;">
                        NO
                    </label>
                </div>
                <br>
            </fieldset>
            <br>
            <fieldset>
                <legend><b>Family Details</b></legend><br>
                <div>
                    <label for="father">Father Occupation: <span class="red-text">*</span></label>
                    <input type="text" name="father" id="father" placeholder="&emsp;Teacher / Engineer / Businessman">
                </div>
                <br>
                <div>
                    <label for="mother">Mother Occupation: <span class="red-text">*</span></label>
                    <input type="text" name="mother" id="mother" placeholder="&emsp;Housewife / Doctor / Teacher">
                </div>
                <br>
                <div class="drink">
                    <label for="drink">Brother(s): </label>
                    <label>
                        <input type="radio" name="choice3" value="Yes" style="display: inline-block; width: 16px; height: 16px; border: 1px solid #000000; cursor: pointer;">
                        YES
                    </label>
                    <label>
                        <input type="radio" name="choice3" value="No" style="display: inline-block; width: 16px; height: 16px; border: 1px solid #000000; cursor: pointer;">
                        NO
                    </label>
                </div>
                <br>
                <div class="drink">
                    <label for="drink">Sister(s): </label>
                    <label>
                        <input type="radio" name="choice4" value="Yes" style="display: inline-block; width: 16px; height: 16px; border: 1px solid #000000; cursor: pointer;">
                        YES
                    </label>
                    <label>
                        <input type="radio" name="choice4" value="No" style="display: inline-block; width: 16px; height: 16px; border: 1px solid #000000; cursor: pointer;">
                        NO
                    </label>
                </div>
                <br>
            </fieldset>
            <br>
            <fieldset>
                <legend><b>Profile <span class="red-text">*</span></b></legend><br>
                <div class="username">
                    <label for="phone">UserName:</label>
                    <input type="text" name="username" id="username" placeholder="&emsp;&emsp;&emsp;&emsp;&emsp;Enter UserName" required>
                    &emsp;(UserName must contain characters and digits)
                </div><br>
                <div class="password">
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="&emsp;&emsp;&emsp;&emsp;&emsp;Enter Password" required> &emsp;(Create a strong 8 character password)
                </div><br>
                <div class="confirm">
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" placeholder="&emsp;&emsp;&emsp;&emsp;&emsp;Confirm Password" id="confirm-password" name="confirm-password" required> &emsp;(Re-enter the same password)
                </div>
                <br>
            </fieldset>
            <br>

            <div>
                <label>
                    By clicking Create My Profile, you agree to our <a href="terms-and-conditions.php" class="orange-text">terms &
                        conditions</a>
                    and that you have read our <a href="privacy-policy.php" class="orange-text">privacy policy</a>.
                </label>
            </div>
            <br>
            <div>
                <p class="text-med ">&emsp;&emsp;If you already have an account then <a class="login" href="login.php">Sign In</a>
                </p>
            </div>
            <div class="input-field">
                <input type="submit" name="submit" value="Create My Profile" class="btn">
            </div>
        </form>
    </div>
</body>

</html>

<!-- Backend Start here -->

<?php
if ($_POST['submit']) {

    $filename = $_FILES["pic"]["name"];
    $tempname = $_FILES["pic"]["tmp_name"];
    $folder = "picture/" . $filename;
    move_uploaded_file($tempname, $folder);


    $Profile_for = $_POST['profile'];
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Country_code = $_POST['code'];
    $Phone = $_POST['mobileNumber'];
    $DOB = $_POST['DOB'];
    $Marital_status = $_POST['m_status'];
    $Gender = $_POST['gender'];
    $Blood_group = $_POST['bg'];
    $Mother_Tongue = $_POST['mt'];
    $Religion = $_POST['religion'];
    $Caste = $_POST['caste'];
    $Country = $_POST['country'];
    $State = $_POST['state'];
    $City = $_POST['city'];
    $PIN = $_POST['pin'];
    $Disability_type = $_POST['disability_type'];
    $Disability_percent = $_POST['disability_percent'];
    $Qualification = $_POST['qualification'];
    $Profession = $_POST['profession'];
    $Area = $_POST['area'];
    $Smoke = $_POST['choice1'];
    $Drink = $_POST['choice2'];
    $Father_occupation = $_POST['father'];
    $Mother_occupation = $_POST['mother'];
    $Brothers = $_POST['choice3'];
    $Sisters = $_POST['choice4'];
    $Username = $_POST['username'];
    $Password = $_POST['password'];

    $query = "INSERT INTO user_info VALUES('$Profile_for','$Name','$Email','$folder','$Country_code','$Phone','$DOB','$Marital_status','$Gender','$Blood_group','$Mother_Tongue','$Religion','$Caste','$Country','$State','$City','$PIN','$Disability_type','$Disability_percent','$Qualification','$Profession','$Area','$Smoke','$Drink','$Father_occupation','$Mother_occupation','$Brothers','$Sisters','$Username','$Password')";
    $data = mysqli_query($con, $query);
    if ($data) {
        echo "<script> alert('Successfully data inserted into database') </script>";
    } else {
        echo "<script> alert('Failed to insert data') </script>";
    }
}
?>