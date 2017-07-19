<div class="content-wrapper">
                    <div class="content">
                        
		<!--this style is created to display auto complete inside the modal window- significance for z-index-->
<style> 
    .ui-autocomplete {
        cursor: default;
        left: 0;
        position: absolute;
        top: 0;
        z-index: 99999999999;
    }


</style>
<div class="page-header">
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="#"><i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="#">Messages/SMS</a></li>
            <li class="active">Mailbox</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
        <div class="row">
        <div class="col-sm-12">
            <div class="bordered_heading">
                <div class="row">
                    <div class="col-sm-3 col-md-2">
                        <h1 class="heading_lg">Inbox</h1>
                    </div>
                    <div class="col-sm-4 col-md-4 mbox_table_actions">
                    </div>
                    <div class="col-sm-3 col-md-4 col-sm-offset-2 mbox_table_actions">
                        <input placeholder="Find message" class="form-control" id="mailbox_search" type="text">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-3 col-md-2">
                    <div class="mailbox_nav">
                        <div class="sepH_b">
                            
                            <a class="btn btn-default btn-sm" href="#newMail" id="newmail">New Email</a>
                        </div><br>
                          <div class="sepH_b">
                                    <a class="btn btn-default btn-sm" href="#groupMail" id="groupmail">Group Email</a>
                                </div><br>                        <ul class="nav nav-pills nav-stacked">
                             <li class="active"><a href="email">Inbox</a></li>
                                    <li><a href="outbox">Outbox</a></li>
                                    <li><a href="trash">Trash</a></li>                        </ul>
                    </div>
                </div>
                <div class="col-sm-9 col-md-10">
                                        <div class="mailbox_content">
                        <table data-provides="rowlink" data-page-size="20" data-filter="#mailbox_search" class="table toggle-square default footable-loaded footable" id="mailbox_table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th data-hide="phone,tablet">From</th>
                                    <th>Subject</th>
                                    <th data-hide="phone" class="footable-last-column">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="newMail">
                <div class="modal-dialog">
            <div class="modal-content">
                <form enctype="multipart/form-data" id="inbox-form" action="/index.php/core/email/email" method="post">                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="myModalLabel" class="modal-title">New Message</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="mail_to">To</label>
                        <script type="text/javascript">
/*&lt;![CDATA[*/

      function split(val) {
       return val.split(/,\s*/);
      }
      function extractLast(term) {
       return split(term).pop();
      }
    
/*]]&gt;*/
</script>                        <input class="form-control ui-autocomplete-input" id="username" name="username" autocomplete="off" type="text">                    </div>
                    <div class="form-group">
                                                <label for="mail_subject">Subject</label>
                        <input id="mail_subject" name="mail_subject" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                                                <label for="mail_message">Message</label>
                        <textarea class="form-control" rows="6" cols="30" id="mail_message" name="mail_message"></textarea>
                    </div>

<!--                    <div class="form-group">
                                            </div>-->
                </div>
                <div class="modal-footer">
                    <a href="javascript:sendmail()" class="btn btn-primary">Send</a>
                </div>
</form>            </div>
        </div>
    </div>
    <div class="modal fade" id="groupMail">
                <div class="modal-dialog">
            <div class="modal-content">
                <form enctype="multipart/form-data" id="groupinbox-form" action="/index.php/core/email/email" method="post">                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="myModalLabel" class="modal-title">New Message</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="mail_to">Batch</label>
                        <select name="batch[]" id="s2_basic" multiple="" class="form-control">
                                                            <optgroup label="uneco">
                                                                            <option value="1">A</option>
                                                                        <option value="15">B</option>
                                                                        <option value="41">bala</option>
                                                                        <option value="47">Imperial Batch</option>
                                                                        <option value="67">test</option>
                                                                        <option value="69">01</option>
                                                                        <option value="89">23r</option>
                                                                        <option value="130">jff</option>
                                                                        <option value="135">Bat1</option>
                                                                        <option value="145">12 PM tO 01 PM</option>
                                                                        <option value="146">10 AM tO 11 AM</option>
                                                                        <option value="148">9 AM TO 10 AM</option>
                                                                        <option value="156">java</option>
                                                                        <option value="174">vghvghvhgv</option>
                                                                        <option value="185">fffffffffffffffffff</option>
                                                                        <option value="191">Tronc Commun</option>
                                                                </optgroup>

                                <optgroup label="Economy">
                                                                            <option value="2">B</option>
                                                                        <option value="10">sadf</option>
                                                                        <option value="14">Mars</option>
                                                                        <option value="16">f1</option>
                                                                        <option value="19">klkjkjklj</option>
                                                                        <option value="27">qqqqqqqqqqq qqqq qqq</option>
                                                                        <option value="31">batch1</option>
                                                                        <option value="50">2016</option>
                                                                        <option value="53">yyyy5</option>
                                                                        <option value="114">2015</option>
                                                                        <option value="119">io</option>
                                                                        <option value="128">ii</option>
                                                                        <option value="178">BAT 1</option>
                                                                        <option value="186">mytest batch</option>
                                                                        <option value="192">HEG</option>
                                                                </optgroup>

                                <optgroup label="Pre School 1">
                                                                            <option value="4">A</option>
                                                                        <option value="61">B</option>
                                                                        <option value="80">C</option>
                                                                        <option value="95">abc </option>
                                                                        <option value="99">Demo batch</option>
                                                                        <option value="104">ZXZX</option>
                                                                        <option value="189">Section A</option>
                                                                </optgroup>

                                <optgroup label="Pre School 2">
                                                                            <option value="3">A</option>
                                                                        <option value="33">sadasd</option>
                                                                        <option value="94">batch1</option>
                                                                        <option value="180">ddd</option>
                                                                </optgroup>

                                <optgroup label="Year 1">
                                                                            <option value="5">1</option>
                                                                        <option value="97">test</option>
                                                                        <option value="194">new</option>
                                                                </optgroup>

                                <optgroup label="Year 2">
                                                                            <option value="6">ARTS</option>
                                                                        <option value="78">wewewe</option>
                                                                </optgroup>

                                <optgroup label="Year 3">
                                                                            <option value="7">3 Pink</option>
                                                                        <option value="121">ram</option>
                                                                        <option value="187">ndfgfas</option>
                                                                        <option value="190">myp</option>
                                                                </optgroup>

                                <optgroup label="Year 4">
                                                                            <option value="8">3 Blue</option>
                                                                </optgroup>

                                <optgroup label="Year 5">
                                                                            <option value="9">5 Gold</option>
                                                                        <option value="154">fsdfsdf</option>
                                                                </optgroup>

                                <optgroup label="Computer COuerse">
                                                                            <option value="11">NO</option>
                                                                        <option value="45">dasd1</option>
                                                                        <option value="46">xsdfgh</option>
                                                                        <option value="73">AML</option>
                                                                        <option value="83">2016</option>
                                                                </optgroup>

                                <optgroup label="network security">
                                                                            <option value="54">Frist Batch 2016</option>
                                                                        <option value="131">17 batch</option>
                                                                        <option value="151">CCNA_Batch</option>
                                                                </optgroup>

                                <optgroup label="asp.net">
                                                                            <option value="40">2015-2016</option>
                                                                        <option value="127">2015</option>
                                                                        <option value="129">c</option>
                                                                        <option value="179">raudibatch</option>
                                                                </optgroup>

                                <optgroup label="eeeeee">
                                                                            <option value="12">ekonim</option>
                                                                </optgroup>

                                <optgroup label="TOC">
                                                                            <option value="17">2016</option>
                                                                        <option value="60">A</option>
                                                                </optgroup>

                                <optgroup label="php course">
                                                                            <option value="18">php batch</option>
                                                                        <option value="51">1</option>
                                                                        <option value="77">MALAKIA STO PATERO</option>
                                                                        <option value="184">cse 33</option>
                                                                </optgroup>

                                <optgroup label="Jesus">
                                                                            <option value="138">bmhbm </option>
                                                                </optgroup>

                                <optgroup label="vba">
                                                                            <option value="48">1</option>
                                                                </optgroup>

                                <optgroup label="Engg">
                                                                            <option value="20">A div</option>
                                                                        <option value="85">Primary 1</option>
                                                                </optgroup>

                                <optgroup label="NewCourse">
                                                                            <option value="21">NewBatch</option>
                                                                        <option value="162">Test</option>
                                                                </optgroup>

                                <optgroup label="zzz">
                                                                            <option value="22">moring</option>
                                                                </optgroup>

                                <optgroup label="A1">
                                                                    </optgroup>

                                <optgroup label="A1A">
                                                                            <option value="23">B1B</option>
                                                                </optgroup>

                                <optgroup label="dld">
                                                                    </optgroup>

                                <optgroup label="Nursery">
                                                                            <option value="24">2015-2016</option>
                                                                </optgroup>

                                <optgroup label="cs">
                                                                            <option value="25">new</option>
                                                                </optgroup>

                                <optgroup label="test1">
                                                                    </optgroup>

                                <optgroup label="PGDEMS">
                                                                    </optgroup>

                                <optgroup label="md-1">
                                                                            <option value="28">jan-2016</option>
                                                                </optgroup>

                                <optgroup label="Maths Biology">
                                                                            <option value="29">2016-2017 Ruby</option>
                                                                </optgroup>

                                <optgroup label="Kindergarten ">
                                                                            <option value="30">LKG</option>
                                                                </optgroup>

                                <optgroup label="math">
                                                                            <option value="113">jjj</option>
                                                                        <option value="188">math_batch</option>
                                                                </optgroup>

                                <optgroup label="test123">
                                                                    </optgroup>

                                <optgroup label="asdsa">
                                                                    </optgroup>

                                <optgroup label="asdasd">
                                                                    </optgroup>

                                <optgroup label="ab">
                                                                    </optgroup>

                                <optgroup label="DCA">
                                                                    </optgroup>

                                <optgroup label="MPCEMJ1">
                                                                            <option value="32">J1</option>
                                                                </optgroup>

                                <optgroup label="MPCEMJ2">
                                                                    </optgroup>

                                <optgroup label="12 sdf">
                                                                    </optgroup>

                                <optgroup label="GEN">
                                                                            <option value="43">spring2015</option>
                                                                </optgroup>

                                <optgroup label="Math1">
                                                                    </optgroup>

                                <optgroup label="enc 1101">
                                                                    </optgroup>

                                <optgroup label="Computer Science ">
                                                                            <option value="34">CS_Batch_1</option>
                                                                </optgroup>

                                <optgroup label="Class II">
                                                                            <option value="35">A</option>
                                                                </optgroup>

                                <optgroup label="ece">
                                                                    </optgroup>

                                <optgroup label="SSLC">
                                                                            <option value="37">SSLC 2016-2017 B</option>
                                                                </optgroup>

                                <optgroup label="Plus 2">
                                                                            <option value="38">New Batch</option>
                                                                </optgroup>

                                <optgroup label="civils">
                                                                    </optgroup>

                                <optgroup label="civ">
                                                                    </optgroup>

                                <optgroup label="dhdf">
                                                                    </optgroup>

                                <optgroup label="ba">
                                                                    </optgroup>

                                <optgroup label="BBM">
                                                                            <option value="39">A</option>
                                                                </optgroup>

                                <optgroup label="HappyMan">
                                                                            <option value="63">MCA 2016</option>
                                                                </optgroup>

                                <optgroup label="se">
                                                                    </optgroup>

                                <optgroup label="fgd">
                                                                    </optgroup>

                                <optgroup label="sia">
                                                                    </optgroup>

                                <optgroup label="Pre School 11">
                                                                            <option value="44">2015</option>
                                                                </optgroup>

                                <optgroup label="bbc india">
                                                                    </optgroup>

                                <optgroup label="English">
                                                                    </optgroup>

                                <optgroup label="abc">
                                                                    </optgroup>

                                <optgroup label="dddddddddd">
                                                                    </optgroup>

                                <optgroup label="dddnk">
                                                                    </optgroup>

                                <optgroup label="Standard 1st">
                                                                            <option value="59">test</option>
                                                                </optgroup>

                                <optgroup label="1st class">
                                                                            <option value="49">A</option>
                                                                </optgroup>

                                <optgroup label="inter">
                                                                    </optgroup>

                                <optgroup label="dfsafd">
                                                                    </optgroup>

                                <optgroup label="robotics">
                                                                    </optgroup>

                                <optgroup label="Lehrgang">
                                                                    </optgroup>

                                <optgroup label="Kurs">
                                                                    </optgroup>

                                <optgroup label="fyjc">
                                                                    </optgroup>

                                <optgroup label="fffff">
                                                                    </optgroup>

                                <optgroup label="physcis">
                                                                    </optgroup>

                                <optgroup label="kljdfs">
                                                                    </optgroup>

                                <optgroup label="Master of Computer Application">
                                                                            <option value="183">Secndbtch</option>
                                                                </optgroup>

                                <optgroup label="dfgfdg">
                                                                    </optgroup>

                                <optgroup label="X-A">
                                                                            <option value="55">X-B</option>
                                                                </optgroup>

                                <optgroup label="Science">
                                                                            <option value="56">X-B</option>
                                                                        <option value="57">X-A</option>
                                                                </optgroup>

                                <optgroup label="IIT">
                                                                            <option value="58">IIT Batch1</option>
                                                                </optgroup>

                                <optgroup label="Diploma IT">
                                                                            <option value="62">First Batch</option>
                                                                </optgroup>

                                <optgroup label="PHP">
                                                                    </optgroup>

                                <optgroup label="Shotokan Karate">
                                                                    </optgroup>

                                <optgroup label="bdfb">
                                                                    </optgroup>

                                <optgroup label="JEE">
                                                                    </optgroup>

                                <optgroup label="3rd ">
                                                                            <option value="65">1st batch</option>
                                                                </optgroup>

                                <optgroup label="ats">
                                                                            <option value="66">2016-2017CS</option>
                                                                </optgroup>

                                <optgroup label="karthi">
                                                                    </optgroup>

                                <optgroup label="test">
                                                                    </optgroup>

                                <optgroup label="GENEL KULTUR">
                                                                            <option value="68">GEN</option>
                                                                </optgroup>

                                <optgroup label="kkk">
                                                                    </optgroup>

                                <optgroup label="Hindi">
                                                                    </optgroup>

                                <optgroup label="mathematics">
                                                                            <option value="93">A</option>
                                                                </optgroup>

                                <optgroup label="physics">
                                                                    </optgroup>

                                <optgroup label="mycourse123">
                                                                            <option value="70">Batch-01</option>
                                                                </optgroup>

                                <optgroup label="aero">
                                                                            <option value="71">03</option>
                                                                </optgroup>

                                <optgroup label="Moudle 1">
                                                                    </optgroup>

                                <optgroup label="shiv">
                                                                            <option value="72">Shiva</option>
                                                                </optgroup>

                                <optgroup label="AMEL-01">
                                                                            <option value="75">Batch 01</option>
                                                                        <option value="76">Batch 02</option>
                                                                </optgroup>

                                <optgroup label="Maintenance Engineering">
                                                                            <option value="74">Batch-05</option>
                                                                </optgroup>

                                <optgroup label="ghhjh">
                                                                    </optgroup>

                                <optgroup label="fgfggh">
                                                                    </optgroup>

                                <optgroup label="1st">
                                                                            <option value="79">A</option>
                                                                </optgroup>

                                <optgroup label="Spanish">
                                                                    </optgroup>

                                <optgroup label="Java Training">
                                                                            <option value="81">JAVA TRAINEE A</option>
                                                                        <option value="90">Batch B</option>
                                                                </optgroup>

                                <optgroup label="Curso Basisco Completo">
                                                                    </optgroup>

                                <optgroup label="BBM3">
                                                                    </optgroup>

                                <optgroup label="Computing History">
                                                                            <option value="84">warplab</option>
                                                                </optgroup>

                                <optgroup label="CCC">
                                                                    </optgroup>

                                <optgroup label="FIRST STD">
                                                                            <option value="87">APPLE</option>
                                                                </optgroup>

                                <optgroup label="JSS 1">
                                                                            <option value="88">1ST Term</option>
                                                                </optgroup>

                                <optgroup label="GHSUrdu">
                                                                            <option value="91">GHSBatch</option>
                                                                </optgroup>

                                <optgroup label="NurseryGHS">
                                                                            <option value="92">Nursery-Batch</option>
                                                                </optgroup>

                                <optgroup label="Mathametics">
                                                                    </optgroup>

                                <optgroup label="Test Course ">
                                                                    </optgroup>

                                <optgroup label="Cpbara">
                                                                    </optgroup>

                                <optgroup label="ELEVENTH-MATHS">
                                                                    </optgroup>

                                <optgroup label="test0001">
                                                                    </optgroup>

                                <optgroup label="Au-test">
                                                                    </optgroup>

                                <optgroup label="asdfg">
                                                                            <option value="96">A</option>
                                                                </optgroup>

                                <optgroup label="test0001777">
                                                                    </optgroup>

                                <optgroup label="Database">
                                                                    </optgroup>

                                <optgroup label="Cricket">
                                                                    </optgroup>

                                <optgroup label="KG">
                                                                            <option value="101">A</option>
                                                                </optgroup>

                                <optgroup label="UKG">
                                                                            <option value="102">B</option>
                                                                </optgroup>

                                <optgroup label="CDAC">
                                                                            <option value="103">CDAC</option>
                                                                </optgroup>

                                <optgroup label="CDAC 2">
                                                                    </optgroup>

                                <optgroup label="TestCourse">
                                                                    </optgroup>

                                <optgroup label="bc">
                                                                    </optgroup>

                                <optgroup label="business_ the career">
                                                                            <option value="106">term 1.0</option>
                                                                </optgroup>

                                <optgroup label="music_ the digital domain">
                                                                            <option value="107">term 1.0</option>
                                                                </optgroup>

                                <optgroup label="music_ the video">
                                                                            <option value="108">term 1.0</option>
                                                                </optgroup>

                                <optgroup label="business_ the market">
                                                                            <option value="109">term 1.0</option>
                                                                </optgroup>

                                <optgroup label="JAVA">
                                                                            <option value="110">JAVA </option>
                                                                </optgroup>

                                <optgroup label="accp">
                                                                            <option value="111">9-11 AM</option>
                                                                </optgroup>

                                <optgroup label="Crafting">
                                                                            <option value="112">A</option>
                                                                </optgroup>

                                <optgroup label="BCA">
                                                                    </optgroup>

                                <optgroup label="fvdfvdxfv">
                                                                    </optgroup>

                                <optgroup label="12">
                                                                            <option value="117">Plus Two</option>
                                                                </optgroup>

                                <optgroup label="12th">
                                                                            <option value="115">A</option>
                                                                        <option value="118">Plus Two</option>
                                                                </optgroup>

                                <optgroup label="IT">
                                                                            <option value="116">Diploma IT</option>
                                                                </optgroup>

                                <optgroup label="yu867">
                                                                    </optgroup>

                                <optgroup label="pure english">
                                                                    </optgroup>

                                <optgroup label="islamiat">
                                                                    </optgroup>

                                <optgroup label="mca">
                                                                    </optgroup>

                                <optgroup label="sap">
                                                                            <option value="122">raghav</option>
                                                                </optgroup>

                                <optgroup label="santosh">
                                                                    </optgroup>

                                <optgroup label="3 BLUE">
                                                                            <option value="123">3B</option>
                                                                </optgroup>

                                <optgroup label="3 Pink">
                                                                            <option value="124">3P</option>
                                                                </optgroup>

                                <optgroup label="3 GOLD">
                                                                            <option value="125">3G</option>
                                                                </optgroup>

                                <optgroup label="BA-BA">
                                                                    </optgroup>

                                <optgroup label="ec">
                                                                    </optgroup>

                                <optgroup label="English5">
                                                                    </optgroup>

                                <optgroup label="CA">
                                                                            <option value="126">EVE</option>
                                                                </optgroup>

                                <optgroup label="dfasdfasdfasdfasdfaasdfasdfasdfasd">
                                                                    </optgroup>

                                <optgroup label="cn">
                                                                    </optgroup>

                                <optgroup label="tt">
                                                                    </optgroup>

                                <optgroup label="m.b.a">
                                                                    </optgroup>

                                <optgroup label="manikandan">
                                                                            <option value="132">kandhan</option>
                                                                </optgroup>

                                <optgroup label="ds">
                                                                    </optgroup>

                                <optgroup label="Management">
                                                                    </optgroup>

                                <optgroup label="RKMorning">
                                                                            <option value="133">E0</option>
                                                                </optgroup>

                                <optgroup label="BTECH">
                                                                            <option value="134">CS-A</option>
                                                                </optgroup>

                                <optgroup label="rtfg">
                                                                    </optgroup>

                                <optgroup label="course1">
                                                                    </optgroup>

                                <optgroup label="Commerce">
                                                                    </optgroup>

                                <optgroup label="heythisis">
                                                                            <option value="136">thisisbatch</option>
                                                                </optgroup>

                                <optgroup label="class1">
                                                                    </optgroup>

                                <optgroup label="Bachelor of Science in Computer Science">
                                                                            <option value="137">BSCS2020</option>
                                                                </optgroup>

                                <optgroup label="WOOD PRODUCTS">
                                                                    </optgroup>

                                <optgroup label="DIPLOMA">
                                                                            <option value="140">2016</option>
                                                                </optgroup>

                                <optgroup label="Bir">
                                                                            <option value="141">A</option>
                                                                </optgroup>

                                <optgroup label="maths">
                                                                    </optgroup>

                                <optgroup label="lalaa_course">
                                                                            <option value="142">lalaa_Batch</option>
                                                                </optgroup>

                                <optgroup label="bachelor in computer science">
                                                                    </optgroup>

                                <optgroup label="computer">
                                                                    </optgroup>

                                <optgroup label="M.Sc.IT">
                                                                            <option value="144">M.Sc.IT Semester-1</option>
                                                                </optgroup>

                                <optgroup label="Afzal">
                                                                    </optgroup>

                                <optgroup label="thiru">
                                                                    </optgroup>

                                <optgroup label="thdsfsdf">
                                                                    </optgroup>

                                <optgroup label="Bangla">
                                                                    </optgroup>

                                <optgroup label="1st standard">
                                                                            <option value="149">batch1</option>
                                                                </optgroup>

                                <optgroup label="Data Entry">
                                                                            <option value="150">morning batch</option>
                                                                </optgroup>

                                <optgroup label="kkka">
                                                                    </optgroup>

                                <optgroup label="Accounting information system">
                                                                    </optgroup>

                                <optgroup label="Class 1">
                                                                            <option value="152">Sec A</option>
                                                                </optgroup>

                                <optgroup label="MCApp">
                                                                            <option value="153">MCA01</option>
                                                                </optgroup>

                                <optgroup label="Electronics and Computer Tech.">
                                                                    </optgroup>

                                <optgroup label="10th">
                                                                    </optgroup>

                                <optgroup label="English Lesson">
                                                                            <option value="157">A</option>
                                                                </optgroup>

                                <optgroup label="Pathak School Demo">
                                                                            <option value="158">PSD-1</option>
                                                                </optgroup>

                                <optgroup label="PTS-1ST-MOR">
                                                                            <option value="159">PTS-1ST-MOR-A1</option>
                                                                </optgroup>

                                <optgroup label="PTS-02-MOR">
                                                                            <option value="160">PTS-02-C1</option>
                                                                </optgroup>

                                <optgroup label="PTS-03-MOR">
                                                                            <option value="161">PTS-03-C1</option>
                                                                </optgroup>

                                <optgroup label="PATHAK-CCE-TEST">
                                                                            <option value="163">CCE-PTK-01ST</option>
                                                                </optgroup>

                                <optgroup label="Unit Test 1">
                                                                            <option value="165">2016-17</option>
                                                                </optgroup>

                                <optgroup label="Unit Test 2">
                                                                    </optgroup>

                                <optgroup label="english science">
                                                                    </optgroup>

                                <optgroup label="JKSC-CA-CPT">
                                                                            <option value="166">CPT_DEC16_REVISION</option>
                                                                        <option value="167">CPT_DEC16_FRESH</option>
                                                                        <option value="168">CPT_DEC16_KVKV</option>
                                                                        <option value="169">CPT_DEC16_SEN</option>
                                                                        <option value="170">CPT_DEC16_BHS</option>
                                                                        <option value="171">CPT_DEC16_PTS</option>
                                                                </optgroup>

                                <optgroup label="JKSC-CA-IPCC">
                                                                            <option value="172">IPCC_MAY17_REGULAR</option>
                                                                </optgroup>

                                <optgroup label="Ahihihi">
                                                                    </optgroup>

                                <optgroup label="Class 10">
                                                                            <option value="173">Sec 10</option>
                                                                </optgroup>

                                <optgroup label="qef">
                                                                    </optgroup>

                                <optgroup label="7th">
                                                                            <option value="175">7th-A</option>
                                                                </optgroup>

                                <optgroup label="tetet">
                                                                    </optgroup>

                                <optgroup label="5th class">
                                                                            <option value="177">2015-16</option>
                                                                </optgroup>

                                <optgroup label="Environment Management">
                                                                    </optgroup>

                                <optgroup label="vsd">
                                                                    </optgroup>

                                <optgroup label="C language">
                                                                    </optgroup>

                                <optgroup label="gphanu">
                                                                    </optgroup>

                                <optgroup label="cczx">
                                                                    </optgroup>

                                <optgroup label="22">
                                                                    </optgroup>

                                <optgroup label="Echocardiography">
                                                                            <option value="181">Echo L1B28</option>
                                                                </optgroup>

                                <optgroup label="2nd">
                                                                            <option value="182">a</option>
                                                                </optgroup>

                                <optgroup label="Computer Science And engineering">
                                                                    </optgroup>

                                <optgroup label="0009">
                                                                    </optgroup>

                                <optgroup label="Applied Auditing IV">
                                                                    </optgroup>

                                <optgroup label="Mathemeatics">
                                                                    </optgroup>

                                <optgroup label="Maths11">
                                                                    </optgroup>

                                <optgroup label="ff">
                                                                    </optgroup>

                                <optgroup label="hak">
                                                                    </optgroup>

                                <optgroup label="Book">
                                                                    </optgroup>

                                <optgroup label="Cambodia">
                                                                    </optgroup>

                                <optgroup label="kjo">
                                                                    </optgroup>

                                <optgroup label="my my">
                                                                    </optgroup>

                                <optgroup label="my hhhh">
                                                                    </optgroup>

                                <optgroup label="economics">
                                                                    </optgroup>

                                <optgroup label="biology">
                                                                    </optgroup>

                                <optgroup label="B.Sc in Computer Science">
                                                                            <option value="193">2016-2017</option>
                                                                </optgroup>

                                <optgroup label="GHS-Nur">
                                                                            <option value="195">GHS-Nur-Bat</option>
                                                                </optgroup>

                                <optgroup label="PGDBM">
                                                                            <option value="196">0406</option>
                                                                </optgroup>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mail_to">Department</label>
                        <select name="department[]" id="s2_basic1" multiple="" class="form-control">
                                                            <option value="1">computer cs</option>

                                <option value="2">Management</option>

                                <option value="3">Student Affairs</option>

                                <option value="4">Human Resources</option>

                                <option value="5">Finance1</option>

                                <option value="6">Marketing</option>

                                <option value="7">Training</option>

                                <option value="8">Quality</option>

                                <option value="9">Exam</option>

                                <option value="10">Admin</option>

                                <option value="11">BUS</option>

                                <option value="12">LIBRARY</option>

                                <option value="13">OTHERS</option>

                                <option value="14">ACCOUNT</option>

                                <option value="15">NON TEACHING</option>

                                <option value="16">dfdffd</option>

                                <option value="17">mmn</option>

                                <option value="18">aaaaa1</option>

                                <option value="19">Faculty</option>

                                <option value="20">Administration</option>

                                <option value="21">rte</option>

                                <option value="22">xzxxas</option>

                                <option value="23">hostel</option>

                                <option value="24">Computer Science</option>

                                <option value="25">CSE</option>

                                <option value="26">Civil </option>

                                <option value="27">sdfsf</option>

                                <option value="28">Animesh Quila</option>

                                <option value="29">Animesh Quila t</option>

                                <option value="30">xxxxxxxxxxxxxx</option>

                                <option value="31">dep</option>

                                <option value="32">admin1</option>

                                <option value="33">Peon Dep</option>

                                <option value="34">Carnatic Vocal</option>

                                <option value="35">Carnatic Flute</option>

                                <option value="36">Teaching</option>

                                <option value="37">dfdf</option>

                                <option value="38">dI</option>

                                <option value="39">IT</option>

                                <option value="40">Information Technology</option>

                                <option value="41">Class 12</option>

                                <option value="42">Pubic Admin</option>

                                <option value="43">Science</option>

                                <option value="44">Abcd</option>

                                <option value="45">student</option>

                                <option value="46">Computers Science</option>

                                <option value="47">Deptment</option>

                                <option value="48">Accounting</option>

                                <option value="49">lkg</option>

                                <option value="50">xczxcxzc</option>

                                <option value="51">international relation</option>

                                <option value="52">hr dep</option>

                                <option value="53">test1</option>

                                <option value="54">marhs</option>

                                <option value="55">civil department</option>

                                <option value="56">Management department added in guardian login</option>

                                <option value="57">sports</option>

                                <option value="58">demo</option>

                                <option value="59">test</option>

                                <option value="60">Teaching Ali</option>

                                <option value="61">fggh</option>

                                <option value="62">House Keeping</option>

                                <option value="63">JKSC TEACHING TEAM</option>

                                <option value="64">electronics</option>

                                <option value="65">computer cse</option>

                                <option value="66">NaveenDept</option>

                                <option value="67">Engineers</option>

                                <option value="68">Finance Department</option>

                                <option value="69">india</option>

                                <option value="70">Business Intelligence</option>

                                <option value="71">cse cs</option>

                                <option value="72">ADMIN-KLB</option>

                                <option value="73">Compuer Application</option>

                                <option value="74">Human sciences</option>

                                <option value="75">discipline office</option>

                                <option value="76">Computer and IT</option>

                                <option value="77">aa</option>

                                <option value="78">aahg</option>

                        </select>
                    </div>
                    <div class="form-group">
                                                <label for="mail_subject">Subject</label>
                        <input id="groupmail_subject" name="mail_subject" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                                                <label for="mail_message">Message</label>
                        <textarea class="form-control" rows="6" cols="30" id="groupmail_message" name="mail_message"></textarea>
                    </div>
<!--                    <div class="form-group">
                                            </div>-->
                </div>
                <div class="modal-footer">
                    <a href="javascript:sendgroupmail()" class="btn btn-primary">Send</a>
                </div>
</form>            </div>
        </div>
    </div>
    <div class="modal fade" id="showMail">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 id="mailfromlabel" class="modal-title">Mail From</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <label for="show_subject">Subject</label>
                            <input id="show_subject" name="show_subject" class="form-control" disabled="" type="text">
                        </div>
                        <div class="form-group">
                            <label for="show_message">Message</label>
                            <textarea class="form-control" rows="6" cols="30" id="show_message" name="show_message" disabled=""></textarea>
                        </div>
                        <div class="form-group">
                            Attachment details
                            <div id="show_attachment"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:delMail();" class="btn btn-default">Delete</a>
                        <button class="btn btn-default" data-dismiss="modal" type="button" onclick="location.reload()">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<script>
    var selectedmsgid;
    $(document).ready(function () {

        $('#mailbox_table tr').click(function () {
            $('#show_attachment').empty();
            selectedmsgid = $(this).attr('id');
            $.ajax({
                type: "POST",
                url: "mailread",
                data: {id: selectedmsgid},
                dataType: "html",
                success: function (data) {
                    var jobj = jQuery.parseJSON(data);
                    $('#mailfromlabel').text('Mail From ' + jobj.name);
                    $('#show_subject').val(jobj.subject);
                    $('#show_message').text(jobj.content);
                    if (jobj.attachment === "") {
                        $('#show_attachment').append('No files');
                    } else {
                        $('#show_attachment').append('&lt;a href="/../banner/' + jobj.attachment + '"&gt;Download&lt;/a&gt;');

                    }
                    $('#showMail').modal('show');
                }
            });

        });


        $('#newmail').click(function () {
            $('#newMail').modal('show');

        });
        $('#groupmail').click(function () {
            $('#groupMail').modal('show');

        });

    });

    function delMail() {
        $.ajax({
            type: "POST",
            url: "delmail",
            data: {id: selectedmsgid},
            dataType: "html",
            success: function (data) {
                alert("Mail Deleted Succesfully");
                $("#showMail").modal("hide");
                location.reload();
            }
        });
    }
// this script for collecting the form data and pass to the controller action and doing the on success validations
    function uploadImage() {
        $("#email_attachmentpath").click();
        return false;
    }
    function sendmail() {
        var formData = new FormData($("#inbox-form")[0]);
        $.ajax({
            url: '/index.php/core/email/mailsend',
            type: 'POST',
            data: formData,
            datatype: 'json',
            beforeSend: function () {
            },

            success: function (data) {
                alert(data);
                window.location.assign('email');
            },
            complete: function () {
            },
            error: function (data) {
                alert("There may a error on uploading. Try again later");
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }
    function sendgroupmail() {
        var formData = new FormData($("#groupinbox-form")[0]);
        $.ajax({
            url: '/index.php/core/email/groupmailsend',
            type: 'POST',
            data: formData,
            datatype: 'json',
            beforeSend: function () {
            },
            success: function (data) {
                alert(data);
                window.location.assign('email');
                // on success do some validation or refresh the content div to display the uploaded images 
            },
            complete: function () {
                // success alerts
            },
            error: function (data) {
                alert("There may a error on uploading. Try again later");
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }
</script>	

		
                    </div>
                    <div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
                        <ul class="nav navbar-nav no-border visible-xs-block">
                            <li>
                                <a data-target="#navbar-second" data-toggle="collapse" class="text-center collapsed">
                                    <i class="icon-circle-up2"></i>
                                </a>
                            </li>
                        </ul>
                        <div id="navbar-second" class="navbar-collapse collapse">
                            <div class="navbar-text">
                                &copy; 2015. Webschool by GESCIS Technologies Pvt Ltd. V3.0
                            </div>
                        </div>
                    </div>
                </div>