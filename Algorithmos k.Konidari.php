
<?php
require 'index.php'
?>
<!Doctype html>
<html>
<head>
<title>Αλγόριθμος Κ.Κονιδάρι</title>
<meta charset="UTF-8"/>
</head>
<body>
<div id="box">
<h1>Αλγόριθμος Κ.Κονιδάρι</h1><br><br><br>
<form action="" method="post">
<div>
  <label id="label_input_day" for="KH">Ημέρα:</label>
  <input type ="number"  list="days" name="KH" id="KH"placeholder="Ημέρα">
  <datalist id="days">
    <option value="01">
    <option value="02">
    <option value="03">
    <option value="04">
    <option value="05">
    <option value="06">
    <option value="07">
    <option value="08">
    <option value="09">
    <option value="10">
    <option value="11">
    <option value="12">
    <option value="13">
    <option value="14">
    <option value="15">
    <option value="16">
    <option value="17">
    <option value="18">
    <option value="19">
    <option value="20">
    <option value="21">
    <option value="22">
    <option value="23">
    <option value="24">
    <option value="25">
    <option value="26">
    <option value="27">
    <option value="28">
    <option value="29">
    <option value="30">
    <option value="31">
  </datalist>
  
</div>
<div>
  <label id="label_input_month" for="KM1">Μήνας:</label>
  <input type ="number" list="months" name="KM1" id="KM1"placeholder="Μήνας">
  <datalist id="months">
    <option value="01">
    <option value="02">
    <option value="03">
    <option value="04">
    <option value="05">
    <option value="06">
    <option value="07">
    <option value="08">
    <option value="09">
    <option value="10">
    <option value="11">
    <option value="12">
  </datalist>
</div>
<div>
  <label id="label_input_year" for="KX1">Χρόνος:</label>
  <input type ="number" list="years" name="KX1" id="KX1"placeholder="Χρόνος">
  <datalist id="years">
    <option value="00">
    <option value="01">
    <option value="02">
    <option value="03">
    <option value="04">
    <option value="05">
    <option value="06">
    <option value="07">
    <option value="08">
    <option value="09">
    <option value="10">
    <option value="11">
    <option value="12">
    <option value="13">
    <option value="14">
    <option value="15">
    <option value="16">
    <option value="17">
    <option value="18">
    <option value="19">
    <option value="20">
    <option value="21">
    <option value="22">
    <option value="23">
    <option value="24">
    <option value="25">
    <option value="26">
    <option value="27">
    <option value="28">
    <option value="29">
    <option value="30">
    <option value="31">
    <option value="32">
    <option value="33">
    <option value="34">
    <option value="35">
    <option value="36">
    <option value="37">
    <option value="38">
    <option value="39">
    <option value="40">
    <option value="41">
    <option value="42">
    <option value="43">
    <option value="44">
    <option value="45">
    <option value="46">
    <option value="47">
    <option value="48">
    <option value="49">
    <option value="50">
    <option value="51">
    <option value="52">
    <option value="53">
    <option value="54">
    <option value="55">
    <option value="56">
    <option value="57">
    <option value="58">
    <option value="59">
    <option value="60">
    <option value="61">
    <option value="62">
    <option value="63">
    <option value="64">
    <option value="65">
    <option value="66">
    <option value="67">
    <option value="68">
    <option value="69">
    <option value="70">
    <option value="71">
    <option value="72">
    <option value="73">
    <option value="74">
    <option value="75">
    <option value="76">
    <option value="77">
    <option value="78">
    <option value="79">
    <option value="80">
    <option value="81">
    <option value="82">
    <option value="83">
    <option value="84">
    <option value="85">
    <option value="86">
    <option value="87">
    <option value="88">
    <option value="89">
    <option value="90">
    <option value="91">
    <option value="92">
    <option value="93">
    <option value="94">
    <option value="95">
    <option value="96">
    <option value="97">
    <option value="98">
    <option value="99">
  </datalist>
 
</div>
<div>
  <label id="label_input_century" for="KC">Αιώνας:</label>
  <input type ="number" list="centuries" name="KC" id="KC"placeholder="Αιώνας">
  <datalist id="centuries">
    <option value="20">
    <option value="21">
  </datalist>
</div>
<button type="submit"id="button_calculate"onClick="button()">Υπολογίζω</button>
 <button type="reset"id="button_reset" onClick="reset()">Επαναφορά</button>
<br><br><br><br><br><br><br><br>
<span id="date"name="date"><label></label></span><input type="hidden" id ="date_hidden"name="date_hidden"></input><span id="date_1"><label>Αποτελέσματα:</label></span>
<div><input type="hidden" id ="label_week_hidden"name="label_week_hidden"></input><label  id ="label_week"name="label_week"></label></div>
<div id="label_all">
<input type="hidden" id ="label_day_hidden"name="label_day_hidden"></input> 
<label id ="label_day"name="label_day"></label>  
<input type="hidden" id ="label_month_hidden"name="label_month_hidden"></input>
<label id ="label_month"name="label_month"></label> 
<input type="hidden" id ="label_year_hidden"name="label_year_hidden"></input>
<label id ="label_year"name="label_year"></label> 
<div>
<label id ="label_error"></label>
</div>
</div>
<h3>Χρονος υποβολης:</h3>
<h2>Ημερομηνια:<span id="date_2"name="date_2"></h2><h2>Ωρα:<span id="hours"name="hours"></h2>
<input type="hidden" id ="date_2_hidden"name="date_2_hidden"></input>
<input type="hidden" id ="hours_hidden"name="hours_hidden"></input>
</form>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<div id = "box_1">
<h2><small>Ο Αλγόριθμος εκτελείται ως εξής:</small></h2>
<p>
<h4>Συντομογραφίες:</h4>
Δ=Χρόνος <br>                        
Π=Πηλίκο   <br>          
Υ=Υπόλοιπο   <br>            
πολ7=το αμέσως κατώτερο πολλαπλάσιο του 7<br>  συμπεριλαμβάνεται και το (7x0) <br>       ΚΧ=Κωδικός Χρόνου<br>    
ΚΜ=Κωδικός Μήνα <br> 
ΚΗ=Κωδικός Ημέρας <br> 
Το( [ ] ) σημαίνει ακαίρεο μέρος της διέρεσης. <br> 
Χρον=Χρονιά <br> 
Αριθμός = η ημέρα που ψάχνουμε  <br>   
<b>Σημείωση: Η χρόνια θα αναγράφεται ως διψήφιο νούμερο(δηλαδή θα χωρίζεται σε χρόνο και αιώνα).</b>
</p>

<p>Βημα 1<sup>°</sup>:
Διαιρούμε τον χρονο με το 12 σε Ευκλείδια διαίρεση(Πηλικο και Υπόλοιπο).<br><br><br>
<div id="text_1">
<span>Ημέρα</span><span>/</span><span>Μήνας</span><span>/</span><span>Χρόνος</span>
<span id="text">Αιώνας</span>
</div></p>
<br><br><p>
<span id="text_2">Δ| 12</span><br>
<span id="text_3">|-------</span><br>
<span id="text_20">Υ|  Π</span><br><br></p>
<p>Βημα 2<sup>°</sup>:<p>
Κάνουμε αντικατάσταση το πηλίκο και το υπόλοιπο στον παρακάτω τυπο και βρισκουμε τον κωδικό του χρόνου.<br><br>

<span id="text_4">Υ</span> <br>
(Π+Υ+[----])-πολ7=ΚX<br>
<span id="text_4">4</span><br><br>
        
<p>Βημα 3<sup>°</sup>:Απο τον μήνα βρίσκουμε τον κωδικό του Μήνα.
<br><br>
     Μήνας   ΚΜ<br>
      1.   = <span id="text_18">0</span> <br>
      2.   =   <span id="text_18">3</span><br> 
      3.   =  <span id="text_18">3</span> <br> 
      4.   =   <span id="text_18">6</span><br> 
      5.   =  <span id="text_18">1</span> <br>  
      6.   =   <span id="text_18">4</span><br> 
      7.   =  <span id="text_18">6</span> <br>   
      8.   =  <span id="text_18">2</span> <br>  
      9.   =  <span id="text_18">5</span> <br>    
     10.   =  <span id="text_19">0</span> <br>   
     11.   =  <span id="text_19">3</span> <br>   
     12.   =   <span id="text_19">5</span><br><br><br> 

Ο κωδικός της ημέρας ειναι η ίδια η ημέρα.<br><br>
</p>     
<p>Βημα 4<sup>°</sup>:<br><br>
Προσθετω τους 3 κωδικούς και αφαιρώ το αμέσως κατωτερο πολλαπλάσιο του 7.<br><br>(ΚΧ+ΚΜ+ΚΗ)-πολ7= Αριθμός<br><br>

Αυτος ο αριθμός που θα προκύψει ειναι η ημέρα που ζητάμε.<br><br><br>

0--->Κυριακή<br>
<span id="text_14">1</span>--->Δευτέρα<br>
<span id="text_15">2---->Τρίτη</span><br>
3--->Τετάρτη<br>
<span><span id="text_16">4--->Πέμπτη</span><br>
<span id="text_17">5--->Παρασκευή</span><br>
6--->Σάββατο<br><br>
</p>
<p>Βημα 5<sup>°</sup>:</p><br>Ελέγχουμε εαν η χρόνια ειναι δίσεκτη.Εαν η χρόνια ειναι δίσεκτη και ο μηνας ειναι Φεβρουάριος τοτε αφαιρουμε μια μοναδα απο το τελικο αποτέλεσμα.<br><br><br>

Χρον.<span id="text_5">ΚΧ.</span>
<span id="text_8">Π.</span>
<span id="text_9">Υ.</span>                 
<span id="text_21">Δίσεκτα έτη του</span><br>                                                                   99/12=4.<span id="text_10">8.</span><span id="text_11">3</span><span id="text_6">Φεβρουαρίου (-1)</span><br>
98/12=3.<span id="text_10">8.</span><span id="text_11">2</span>                
<span id="text_6">απο το τελικό</span><br>
97/12=2.<span id="text_10">8.</span><span id="text_11">1</span>         <span id="text_6">αποτελέσμα.</span><br>
96/12=1.<span id="text_10">8.</span><span id="text_11">0</span>     <span id ="text_7">δίσεκτο</span> <br>
95/12=6.<span id="text_10">7.</span><span id="text_22">11</span><br>
94/12=5.<span id="text_10">7.</span><span id="text_22">10</span><br>  
93/12=4.<span id="text_10">7.</span><span id="text_11">9</span><br>
92/12=3.<span id="text_10">7.</span><span id="text_11">8</span>   <span id ="text_7">δίσεκτο</span><br>
91/12=1.<span id="text_10">7.</span><span id="text_11">7</span><br>
90/12=0.<span id="text_10">7.</span><span id="text_11">6</span><br>
89/12=6.<span id="text_10">7.</span><span id="text_11">5</span><br>
88/12=5.<span id="text_10">7.</span><span id="text_11">4</span>       <span id ="text_7">δίσεκτο</span><br>
87/12=3.<span id="text_10">7.</span><span id="text_11">3</span><br>
86/12=2.<span id="text_10">7.</span><span id="text_11">2</span><br>
85/12=1.<span id="text_10">7.</span><span id="text_11">1</span><br>
84/12=0.<span id="text_10">7.</span><span id="text_11">0</span>     <span id ="text_7">δίσεκτο</span><br>
83/12=5.<span id="text_10">6.</span><span id="text_22">11</span><br>
82/12=4.<span id="text_10">6.</span><span id="text_22">10</span><br>
81/12=3.<span id="text_10">6.</span><span id="text_11">9</span><br>
80/12=2.<span id="text_10">6.</span><span id="text_11">8</span>        <span id ="text_7">δίσεκτο</span><br>
79/12=0.<span id="text_10">6.</span><span id="text_11">7</span><br>
78/12=6.<span id="text_10">6.</span><span id="text_11">6</span><br>
77/12=5.<span id="text_10">6.</span><span id="text_11">5</span><br>
76/12=4.<span id="text_10">6.</span><span id="text_11">4</span>        <span id ="text_7">δίσεκτο</span><br>
75/12=2.<span id="text_10">6.</span><span id="text_11">3</span><br>
74/12=1.<span id="text_10">6.</span><span id="text_11">2</span><br>
73/12=0.<span id="text_10">6.</span><span id="text_11">1</span><br>
72/12=6.<span id="text_10">6.</span><span id="text_11">0</span>        <span id ="text_7">δίσεκτο</span><br>
71/12=4.<span id="text_10">5.</span><span id="text_22">11</span><br>
70/12=3.<span id="text_10">5.</span><span id="text_22">10</span><br>
69/12=2.<span id="text_10">5.</span><span id="text_11">9</span><br>
68/12=1.<span id="text_10">5.</span><span id="text_11">8</span>       <span id ="text_7">δίσεκτο</span><br>
67/12=6.<span id="text_10">5.</span><span id="text_11">7</span><br>
66/12=5.<span id="text_10">5.</span><span id="text_11">6</span><br>
65/12=4.<span id="text_10">5.</span><span id="text_11">5</span><br>
64/12=3.<span id="text_10">5.</span><span id="text_11">4</span>        <span id ="text_7">δίσεκτο</span><br>
63/12=1.<span id="text_10">5.</span><span id="text_11">3</span><br>
62/12=0.<span id="text_10">5.</span><span id="text_11">2</span><br>
61/12=6.<span id="text_10">5.</span><span id="text_11">1</span><br>
60/12=5.<span id="text_10">5.</span><span id="text_11">0</span>       <span id ="text_7">δίσεκτο</span><br>
59/12=3.<span id="text_10">4.</span><span id="text_22">11</span><br>
58/12=2.<span id="text_10">4.</span><span id="text_22">10</span><br>
57/12=1.<span id="text_10">4.</span><span id="text_11">9</span><br>
56/12=0.<span id="text_10">4.</span><span id="text_11">8</span>       <span id ="text_7">δίσεκτο</span><br>
55/12=5.<span id="text_10">4.</span><span id="text_11">7</span><br>
54/12=4.<span id="text_10">4.</span><span id="text_11">6</span><br>
53/12=3.<span id="text_10">4.</span><span id="text_11">5</span><br>
52/12=2.<span id="text_10">4.</span><span id="text_11">4</span>        <span id ="text_7">δίσεκτο</span><br>
51/12=0.<span id="text_10">4.</span><span id="text_11">3</span><br>
50/12=6.<span id="text_10">4.</span><span id="text_11">2</span><br>
49/12=5.<span id="text_10">4.</span><span id="text_11">1</span><br>
48/12=4.<span id="text_10">4.</span><span id="text_11">0</span>        <span id ="text_7">δίσεκτο</span><br>
47/12=2.<span id="text_10">3.</span><span id="text_22">11</span><br>
46/12=1.<span id="text_10">3.</span><span id="text_22">10</span><br>
45/12=0.<span id="text_10">3.</span><span id="text_11">9</span><br>
44/12=6.<span id="text_10">3.</span><span id="text_11">8</span>        <span id ="text_7">δίσεκτο</span><br>
43/12=4.<span id="text_10">3.</span><span id="text_11">7</span><br>
42/12=3.<span id="text_10">3.</span><span id="text_11">6</span><br>
41/12=2.<span id="text_10">3.</span><span id="text_11">5</span><br>
40/12=1.<span id="text_10">3.</span><span id="text_11">4</span>          <span id ="text_7">δίσεκτο</span><br>
39/12=6.<span id="text_10">3.</span><span id="text_11">3</span><br>
38/12=5.<span id="text_10">3.</span><span id="text_11">2</span><br>
37/12=4.<span id="text_10">3.</span><span id="text_11">1</span><br>
36/12=3.<span id="text_10">3.</span><span id="text_11">0</span>          <span id ="text_7">δίσεκτο</span><br>
35/12=1.<span id="text_10">2.</span><span id="text_22">11</span><br>
34/12=0.<span id="text_10">2.</span><span id="text_22">10</span><br>
33/12=6.<span id="text_10">2.</span><span id="text_11">9</span><br>
32/12=5.<span id="text_10">2.</span><span id="text_11">8</span>          <span id ="text_7">δίσεκτο</span><br>
31/12=3.<span id="text_10">2.</span><span id="text_11">7</span><br>
30/12=2.<span id="text_10">2.</span><span id="text_11">6</span><br>
29/12=1.<span id="text_10">2.</span><span id="text_11">5</span><br>
28/12=0.<span id="text_10">2.</span><span id="text_11">4</span>          <span id ="text_7">δίσεκτο</span><br>
27/12=5.<span id="text_10">2.</span><span id="text_11">3</span><br>
26/12=4.<span id="text_10">2.</span><span id="text_11">2</span><br>
25/12=3.<span id="text_10">2.</span><span id="text_11">1</span><br>
24/12=2.<span id="text_10">2.</span><span id="text_11">0</span>         <span id ="text_7">δίσεκτο</span><br>
23/12=0.<span id="text_10">1.</span><span id="text_22">11</span><br>
22/12=6.<span id="text_10">1.</span><span id="text_22">10</span><br>
21/12=5.<span id="text_10">1.</span><span id="text_11">9</span><br>
20/12=4.<span id="text_10">1.</span><span id="text_11">8</span>          <span id ="text_7">δίσεκτο</span><br>
19/12=2.<span id="text_10">1.</span><span id="text_11">7</span><br>
18/12=1.<span id="text_10">1.</span><span id="text_11">6</span><br>
17/12=0.<span id="text_10">1.</span><span id="text_11">5</span><br>
16/12=6.<span id="text_10">1.</span><span id="text_11">4</span>           <span id ="text_7">δίσεκτο</span><br>
15/12=4.<span id="text_10">1.</span><span id="text_11">3</span><br>
14/12=3.<span id="text_10">1.</span><span id="text_11">2</span><br>
13/12=2.<span id="text_10">1.</span><span id="text_11">1</span><br>
12/12=1.<span id="text_10">1.</span><span id="text_11">0</span>         <span id ="text_7">δίσεκτο</span><br>
11/12=6.<span id="text_10">0.</span><span id="text_22">11</span><br>
10/12=5.<span id="text_10">0.</span><span id="text_22">10</span><br>
09/12=4.<span id="text_10">0.</span><span id="text_11">9</span><br>
08/12=3.<span id="text_10">0.</span><span id="text_11">8</span>       <span id ="text_7">δίσεκτο</span><br>
07/12=1.<span id="text_10">0.</span><span id="text_11">7</span><br>
06/12=0.<span id="text_10">0.</span><span id="text_11">6</span><br>
05/12=6.<span id="text_10">0.</span><span id="text_11">5</span><br>
04/12=5.<span id="text_10">0.</span><span id="text_11">4</span>        <span id ="text_7">δίσεκτο</span><br>
03/12=3.<span id="text_10">0.</span><span id="text_11">3</span><br>
02/12=2.<span id="text_10">0.</span><span id="text_11">2</span><br>
01/12=1.<span id="text_10">0.</span><span id="text_11">1</span><br>     
00/12=0.<span id="text_10">0.</span><span id="text_11">0</span>        <span id ="text_7">δίσεκτο</span><br><br>

<p>Τέλος εαν ο αιώνας ειναι ο 21<sup>os</sup> αφαιρούμε μια μονάδα απο τον κωδικό του χρόνου.</p><br><br>
Αιων.
<span id="text_12">Αφαίρεση</span><span id="text_12"></span>
<span id="text_13">Χρονιές</span><br>
20αι.<span id="text_12">(-0)απο  ΚΧ</span>  <span id="text_13"> 1900-2000</span><br>
21αι.<span id="text_12">(-1)απο  ΚΧ</span>  <span id="text_13">2000-2100</span><br>
<br><br>
<label for="text_area">Σχόλια:</label><br><br>
<input type="text"placeholder="Όνομα *προαιρετικά"id ="name"><br><br>
<br><input type = "text" id="text_area"placeholder="Γράψτε σχόλιο...."</input><br><br>
<button type="button" id="comment_btn" >Υποβολή</button>
<br><br>
<span><label id="label_comments"></label></span>
<span id ="comment_name"></span>
<span id="wrote"><label></label></span><br><br>
<span id="comment"><label></label></span>
</div>

<script>
function button(){
var KH = parseInt(document.getElementById("KH").value)
var KM1 = parseInt(document.getElementById("KM1").value)
var KX1 = parseInt(document.getElementById("KX1").value)
var KC = parseInt(document.getElementById("KC").value)
var label_week = document.getElementById("label_week")
var label_day = document.getElementById("label_day")
var label_month = document.getElementById("label_month")
var label_year = document.getElementById("label_year")
var label_error = document.getElementById("label_error")
var date = document.getElementById("date")
let num1 = undefined
let KC1 = 0

if (document.getElementById("KH").value == "" || document.getElementById("KM1").value == "" || document.getElementById("KX1").value == "" || document.getElementById("KC").value == ""){
    label_error.innerText="Παρακαλώ συμπληρώστε όλα τα πεδία"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date =  date.innerText=""
KH = 0
KM1 = 0
KX1 = 0
KC = 0
}
else if (KH <= 0 || KH >= 32 || KM1 <= 0 || KM1 >= 13 || KX1 <= -1 || KX1 >= 100 || KC <= 19 || KC >= 22) {
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 0){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 4){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 8){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 12){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 16){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 20){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 24){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 28){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 32){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 36){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 40){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 44){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 48){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 52){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 56){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 60){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}

else if (KM1 == 2 && KH >= 30 && KX1 == 64){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 68){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 72){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 76){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 80){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 84){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 88){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 92){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 30 && KX1 == 96){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 1 && KX1 < 4){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 5 && KX1 < 8){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 9 && KX1 < 12){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 13 && KX1 < 16){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 17 && KX1 < 20){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 21 && KX1 < 24){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 25 && KX1 < 28){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 29 && KX1 < 32){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 33 && KX1 < 36){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 37 && KX1 < 40){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 41 && KX1 < 44){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 45 && KX1 < 48){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 49 && KX1 < 52){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 53 && KX1 < 56){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 57 && KX1 < 60){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 61 && KX1 < 64){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 65 && KX1 < 68){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 69 && KX1 < 72){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 73 && KX1 < 76){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 77 && KX1 < 80){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 81 && KX1 < 84){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 85 && KX1 < 88){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 89 && KX1 < 92){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 93 && KX1 < 96){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 2 && KH >= 29 && KX1 >= 97 && KX1 < 99){
    label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else if (KM1 == 4 && KH >= 31 || KM1 == 6 && KH >= 31 || KM1 == 9 && KH >= 31 || KM1 == 11 && KH >= 31){
label_error.innerText="Παρακαλώ ελέγξτε τις τιμές που εισαγάγατε"
var label_week = label_week.innerText=""
var label_day = label_day.innerText=""
var label_month = label_month.innerText=""
var label_year =  label_year.innerText=""
var date = date.innerText=""
}
else {
   label_error.innerText="" 
}

let KX2 = Math.floor(KX1/12)       
let KX3 = KX1%12     

let KX5 = KX2+KX3

let KX4 = KX5+Math.floor(KX3/4)

if (KX4 <= 7){
    KX = KX4}

else if (KX4 <=14 && KX4 >= 7){
     KX= KX4-7}

else if (KX4 <= 21 && KX4 >= 14){
    KX =  KX4-14}

else if (KX4 <= 28 && KX4 >= 21){
     KX = KX4-21}

else if (KX4 <= 35 && KX4 >= 28){
     KX = KX4-28}

else if (KX4 <= 42 && KX4 >= 35){
      KX = KX4-35}

if  (KC == 21){
  KX = KX-1 }

let mylist = [0, 0, 3, 3, 6, 1, 4, 6, 2, 5,  0, 3, 5]

let num= KH+mylist[KM1]+KX

if (num <= 7){
    num1 = num}

else if (num <=14 && num >= 7){
    num1 = num-7}

else if (num <= 21 && num >= 14){
    num1 = num-14}

else if (num <= 28 && num >= 21){
    num1 = num-21}

else if (num <= 35 && num >= 28){
    num1 = num-28}

else if (num <= 42 && num >= 35){
   num1= num-35}

if (KM1 == 2 && KX1== 0){
                 num1 -= 1}
else if (KM1 == 2 && KX1 == 4){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 8){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 12){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 16){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 20){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 24){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 28){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 32){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 36){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 40){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 44){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 48){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 52){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 56){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 60){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 64){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 68){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 72){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 76){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 80){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 84){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 88){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 92){
                  num1 -= 1}
else if (KM1 == 2 && KX1 == 96){
                  num1 -= 1}
if   (num1 == 0 || num1 == 7){
    label_week.innerText= ("Κυριακή")}
else if (num1 == 1){
    label_week.innerText= ("Δευτέρα")}
else if (num1 == 2){
    label_week.innerText= ("Τρίτη")}
else if (num1 == 3){
    label_week.innerText= ("Τετάρτη")}
else if (num1 == 4){
    label_week.innerText= ("Πέμπτη")}
else if (num1 == 5){
    label_week.innerText= ("Παρασκευή")}
else if  (num1 == 6){
    label_week.innerText= ("Σάββατο")}
    
if (KC == 21){
    KC1 = 2000}
else if (KC == 20){
    KC1 = 1900}

let A = KM1

if (A == 1){
    A = "Ιανουαρίου"}
else if (A == 2){
     A = "Φεβρουαρίου"}
else if (A == 3){
     A = "Μαρτίου"}
else if (A == 4){
     A = "Απριλίου"}
else if (A == 5){
     A = "Μαΐου"}
else if (A == 6){
     A = "Ιουνίου"}
else if (A == 7){
     A = "Ιουλίου"}
else if (A == 8){
     A = "Αυγούστου"}
else if (A == 9){
     A = "Σεπτεμβρίου"}
else if (A == 10){
     A = "Οκτωβρίου"}
else if (A == 11){
     A = "Νοεμβρίου"}
else if (A == 12){
     A = "Δεκεμβρίου"}

let x = parseInt(KX1)+KC1



label_day.innerText=(KH)
label_month.innerText=(A)
label_year.innerText=(x)
date.innerText=(KH+"/"+KM1+"/"+x)

let today = new Date()
let month = today.getMonth()+1
let day = today.getDate()
let year = today.getFullYear()
let total_date = day+"/"+month+"/"+year 

let h =  addZero(today.getHours());
let m =  addZero(today.getMinutes());
let s =  addZero(today.getSeconds());
function addZero(num){
 return num < 10 ? `0${num}`:num;  
}
let total_hour = h+":"+m+":"+s

var date_2 = document.getElementById("date_2")
var hours = document.getElementById("hours")


date_2.innerText = total_date
hours.innerText = total_hour

var div_label_week = document.getElementById("label_week").innerText
var hidden_label_week = document.getElementById("label_week_hidden")
 hidden_label_week.value = div_label_week;
var div_label_day = document.getElementById("label_day").innerText
var hidden_label_day = document.getElementById("label_day_hidden")
hidden_label_day.value = div_label_day;
var div_label_month = document.getElementById("label_month").innerText
var hidden_label_month = document.getElementById("label_month_hidden")
hidden_label_month.value = div_label_month;
var div_label_year = document.getElementById("label_year").innerText
var hidden_label_year = document.getElementById("label_year_hidden")
 hidden_label_year.value = div_label_year;
var date_2 = document.getElementById("date_2").innerText
var date_2_hidden = document.getElementById("date_2_hidden")
date_2_hidden.value =  date_2
var hours = document.getElementById("hours").innerText
var hours_hidden = document.getElementById("hours_hidden")
 hours_hidden.value =  hours

var date = document.getElementById("date").innerText
var date_hidden = document.getElementById("date_hidden")
date_hidden.value = date
 


}





function reset(){
var KH_reset = document.getElementById("KH").value = ""
var KM1_reset = document.getElementById("KM1").value = ""
var KX1_reset = document.getElementById("KX1").value = ""
var KC_reset = document.getElementById("KC").value = ""    


var label_week_reset = document.getElementById("label_week").innerText = ""
var label_day_reset = document.getElementById("label_day").innerText = ""
var label_month_reset = document.getElementById("label_month").innerText = ""
var label_year_reset = document.getElementById("label_year").innerText = ""
var label_error_reset = document.getElementById("label_error").innerText = ""
var date = document.getElementById("date").innerText=""
}  




var comments_btn = document.querySelector("#comment_btn") 

comments_btn.disabled = "true"

var comment = document.querySelector("#text_area")

comment.addEventListener("keyup",()=>{
   if (document.querySelector("#text_area").value === ""){
   comments_btn.disabled = true}
   else{comments_btn.disabled = false}
       
   
})

comments_btn.addEventListener("click",()=>{comments_btn.disabled = true

let a = 1
var label_comments = document.getElementById("label_comments").innerText = "Ο χρηστης"
var input_name = document.getElementById("name").value 
var comments_name = document.getElementById("comment_name").innerText = input_name

var comment = document.getElementById("text_area").value
var wrote = document.getElementById("wrote").innerText = "εγραψε:"
var comments = document.getElementById("comment").innerText = comment

if (document.getElementById("text_area").value == "" && document.getElementById("name").value == ""){
var label_comments = document.getElementById("label_comments").innerText = ""
var comments_name = document.getElementById("comment_name").innerText = ""
var wrote = document.getElementById("wrote").innerText = ""

}
else if(document.getElementById("name").value == ""){
let a = 1
var input_name = document.getElementById("name").value = "Anonymous_"+a
comment_name.innerText ="Anonumous_"+a
document.querySelector("#text_area").value = ""
}
else if (document.getElementById("text_area").value == ""){
var label_comments = document.getElementById("label_comments").innerText = ""
var comments_name = document.getElementById("comment_name").innerText = ""
var wrote = document.getElementById("wrote").innerText = ""
}
else {
var comment= document.getElementById("text_area").value = ""
}
})

</script>
<style>
/*Result labels*/
#label_week{
  text-align: center;}
#label_day{}
#label_month{}
#label_year{}
#label_error{color:#ff000a;
position:relative;
top:-100px;}
#label_all{text-align: center;}

/*input labels*/
#label_input_day{font-size: 2.4em;}
#label_input_month{font-size: 2.4em;}
#label_input_year{font-size: 2.4em;}
#label_input_century{font-size: 2.4em;}

/*placeholders*/ 
::-webkit-input-placeholder{
    color:#ffffff;
    
}
/*title*/
h1{
text-align: center;
font-size: 3.4em;}

/*buttons*/
#button_reset{background-color: #850005;
font-size: 2.1em;
border: solid black 3px;}
#button_calculate{background-color: green;
font-size: 2.1em;
border: solid black 3px;}

/*inputs*/
#KH{background-color:#d9d9d9;
outline:none;
position:relative;
font-size: 2.1em;
left:10px;}
#KM1{background-color:#d9d9d9;
outline:none;
position:relative;
font-size: 2.1em;
left:9px;}
#KX1{background-color:#d9d9d9;
outline:none;
font-size: 2.1em;}
#KC{background-color:#d9d9d9;
outline:none;
font-size: 2.1em;}

/*paragraphs*/
p{text-align: center;}

#box{background-color:#40f5ff;
border: solid black 2px;
position: relative;
left:320px;
height:950px;
width:985px;
}

#box_1{font-size:2em;
max-width:936px;
max-height:903px;
position: relative;
left:500px;
}


/*spaces*/
#text{
position:center;
left:5px}

#text_1{position:relative;
text-align:center;}

#text_2{position:relative;
left:3px;}

#text_3{position:relative;
left:45px;}

#text_4{position:relative;
left:-55px;}

#text_5{position:relative;
left:20px;}

#text_6{position:relative;
left:200px;}

#text_7{position:relative;
left:250px;}

#text_8{position:relative;
left:40px;}

#text_9{position:relative;
left:60px;}

#text_10{position:relative;
left:85px;}

#text_11{position:relative;
left:125px;}

#text_12{position:relative;
left:40px;}

#text_13{position:relative;
left:80px;}

#text_14{position:relative;
left:6px;}

#text_15{position:relative;
left:-26px;}

#text_16{position:relative;
left:-10px;}

#text_17{position:relative;
left:40px;}

#text_18{position:relative;
left:27px;}

#text_19{position:relative;
left:17px;}

#text_20{position:relative;
left:-7px;}

#text_21{position:relative;
left:140px;}

#text_22{position:relative;
left:115px;}


#comment_btn{background-color:yellow;
font-size: 1em;
border: solid black 5px;}
#name {background-color:#d9d9d9;
font-size: 1em;
outline:none;}
#text_area{background-color:red;
outline:none;
font-size: 1em;}
 
#date_1{
position: relative;
left: 4px;
display: inline-block;
font-size: 2.4em;}

#date{border: solid black 2px;
font-size: 2.4em;
border-bottom: none;
position: absolute;
width: 490px;
height: 84px;
left:370px;
text-align: center;
display: inline-block;
background-color:#d9d9d9;
}

#label_week_1{
font-size: 2.4em;
position: relative;
left: 20px;
display: block;
font-size: 20px;    
}
#label_week{
font-size: 2.4em;
border: solid black 2px;
border-top:0;
border-bottom: none;
display: inline-block;
background-color:#d9d9d9;
position: relative;
width: 490px;
height: 80px;
left:370px;
text-align: center;
border-bottom: none;}

#label_all{
font-size: 2.4em;
border: solid black 2px;
border-top:0;
display: block;
background-color:#d9d9d9;
display: inline-block;
position: relative;
width: 490px;
height: 80px;
left:370px;
text-align: center;}

iframe{
position: relative;
left: 100px;}
 
</style>
</body>
</html>
