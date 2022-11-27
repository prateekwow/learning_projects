<style>
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  /* font-family: Raleway; */
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

h1,h2,h3,h4 {
   color: #033a6c;
   /* margin-bottom: 1.5rem; */
}
input {
  padding: 10px;
  width: 100%;
  /* font-size: 17px; */
  /* font-family: Raleway; */
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  /* display: none; */
}

#submit {
  background-color: #033a6c;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

#submit:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #033a6c;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #033a6c;
}
.avatar-preview {
  max-width: 192px;
  min-height: 192px;
  /* min-width: 200px; */
  position: relative;
  /* border-radius: 5%; */
  border: 1px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-preview > div {
  width: 100%;
  height: 100%;
  /* border-radius: 5%; */
  position: absolute;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

</style>
<div class="h60 d-flex align-items-center justify-content-center position-relative bg-img bg-img-fixed"><div class="black-overlay"></div><h1 class="mt-5 text-light position-relative">GT Member Form</h1></div>
<div class="py-4"></div>
<form id="add_member" class="" method="POST" action="" enctype="multipart/form-data">
  <div class="container">
    <!-- <h1>GT Member Form</h1> -->
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
      <h3>Owner Info:</h3>
      <div class="row my-2">
        <div class="col-md-6 col-lg-4 mb-4">
            <label class="mb-1">Owner Name</label>
            <input name='name' id="owner_name" type="text" class="form-control input_validity">
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <label class="mb-1">Owner Phone</label>
            <input name='phone' type="text" id="owner_phone" class="form-control input_validity" minlength="10" maxlength="10">
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <label class="mb-1">Owner Mail</label>
            <input name='email' type="email" class="form-control input_validity">
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <label class="mb-1">Company Name</label>
            <input name='company_name' id="company_name" type="text" class="form-control input_validity">
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <label class="mb-1">Company Location</label>
            <select name='company_location' type="text" class="form-select input_validity">
              <option value="">Select City</option><option>Achalpur</option><option>Achhnera</option><option>Adalaj</option><option>Adilabad</option><option>Adityapur</option><option>Adoni</option><option>Adoor</option><option>Adra</option><option>Adyar</option><option>Afzalpur</option><option>Agartala</option><option>Agra</option><option>Ahmedabad</option><option>Ahmednagar</option><option>Aizawl</option><option>Ajmer</option><option>Akola</option><option>Akot</option><option>Alappuzha</option><option>Aligarh</option><option>AlipurdUrban Agglomerationr</option><option>Alirajpur</option><option>Allahabad</option><option>Alwar</option><option>Amalapuram</option><option>Amalner</option><option>Ambejogai</option><option>Ambikapur</option><option>Amravati</option><option>Amreli</option><option>Amritsar</option><option>Amroha</option><option>Anakapalle</option><option>Anand</option><option>Anantapur</option><option>Anantnag</option><option>Anjangaon</option><option>Anjar</option><option>Ankleshwar</option><option>Arakkonam</option><option>Arambagh</option><option>Araria</option><option>Arrah</option><option>Arsikere</option><option>Aruppukkottai</option><option>Arvi</option><option>Arwal</option><option>Asansol</option><option>Asarganj</option><option>Ashok Nagar</option><option>Athni</option><option>Attingal</option><option>Aurangabad</option><option>Aurangabad</option><option>Azamgarh</option><option>Bagaha</option><option>Bageshwar</option><option>Bahadurgarh</option><option>Baharampur</option><option>Bahraich</option><option>Balaghat</option><option>Balangir</option><option>Baleshwar Town</option><option>Ballari</option><option>Balurghat</option><option>Bankura</option><option>Bapatla</option><option>Baramula</option><option>Barbil</option><option>Bargarh</option><option>Barh</option><option>Baripada Town</option><option>Barmer</option><option>Barnala</option><option>Barpeta</option><option>Batala</option><option>Bathinda</option><option>Begusarai</option><option>Belagavi</option><option>Bellampalle</option><option>Belonia</option><option>Bengaluru</option><option>Bettiah</option><option>BhabUrban Agglomeration</option><option>Bhadrachalam</option><option>Bhadrak</option><option>Bhagalpur</option><option>Bhainsa</option><option>Bharatpur</option><option>Bharuch</option><option>Bhatapara</option><option>Bhavnagar</option><option>Bhawanipatna</option><option>Bheemunipatnam</option><option>Bhilai Nagar</option><option>Bhilwara</option><option>Bhimavaram</option><option>Bhiwandi</option><option>Bhiwani</option><option>Bhongir</option><option>Bhopal</option><option>Bhubaneswar</option><option>Bhuj</option><option>Bihar</option><option>Bikaner</option><option>Bilaspur</option><option>Bobbili</option><option>Bodhan</option><option>Bokaro Steel City</option><option>Bongaigaon City</option><option>Brahmapur</option><option>Buxar</option><option>Byasanagar</option><option>Chaibasa</option><option>Chalakudy</option><option>Chandausi</option><option>Chandigarh</option><option>Changanassery</option><option>Charkhi Dadri</option><option>Chatra</option><option>Chennai</option><option>Cherthala</option><option>Chhapra</option><option>Chhapra</option><option>Chikkamagaluru</option><option>Chilakaluripet</option><option>Chirala</option><option>Chirkunda</option><option>Chirmiri</option><option>Chittoor</option><option>Chittur-Thathamangalam</option><option>Coimbatore</option><option>Cuttack</option><option>Dalli-Rajhara</option><option>Darbhanga</option><option>Darjiling</option><option>Davanagere</option><option>Deesa</option><option>Dehradun</option><option>Dehri-on-Sone</option><option>Delhi</option><option>Deoghar</option><option>Dhamtari</option><option>Dhanbad</option><option>Dharmanagar</option><option>Dharmavaram</option><option>Dhenkanal</option><option>Dhoraji</option><option>Dhubri</option><option>Dhule</option><option>Dhuri</option><option>Dibrugarh</option><option>Dimapur</option><option>Diphu</option><option>Dumka</option><option>Dumraon</option><option>Durg</option><option>Eluru</option><option>English Bazar</option><option>Erode</option><option>Etawah</option><option>Faridabad</option><option>Faridkot</option><option>Farooqnagar</option><option>Fatehabad</option><option>Fatehpur Sikri</option><option>Fazilka</option><option>Firozabad</option><option>Firozpur Cantt.</option><option>Firozpur</option><option>Forbesganj</option><option>Gadwal</option><option>Gandhinagar</option><option>Gangarampur</option><option>Ganjbasoda</option><option>Gaya</option><option>Giridih</option><option>Goalpara</option><option>Gobichettipalayam</option><option>Gobindgarh</option><option>Godhra</option><option>Gohana</option><option>Gokak</option><option>Gooty</option><option>Gopalganj</option><option>Gudivada</option><option>Gudur</option><option>Gumia</option><option>Guntakal</option><option>Guntur</option><option>Gurdaspur</option><option>Gurgaon</option><option>Guruvayoor</option><option>Guwahati</option><option>Gwalior</option><option>Habra</option><option>Hajipur</option><option>Haldwani-cum-Kathgodam</option><option>Hansi</option><option>Hapur</option><option>Hardoi </option><option>Hardwar</option><option>Hazaribag</option><option>Hindupur</option><option>Hisar</option><option>Hoshiarpur</option><option>Hubli-Dharwad</option><option>Hugli-Chinsurah</option><option>Hyderabad</option><option>Ichalkaranji</option><option>Imphal</option><option>Indore</option><option>Itarsi</option><option>Jabalpur</option><option>Jagdalpur</option><option>Jaggaiahpet</option><option>Jagraon</option><option>Jagtial</option><option>Jaipur</option><option>Jalandhar Cantt.</option><option>Jalandhar</option><option>Jalpaiguri</option><option>Jamalpur</option><option>Jammalamadugu</option><option>Jammu</option><option>Jamnagar</option><option>Jamshedpur</option><option>Jamui</option><option>Jangaon</option><option>Jatani</option><option>Jehanabad</option><option>Jhansi</option><option>Jhargram</option><option>Jharsuguda</option><option>Jhumri Tilaiya</option><option>Jind</option><option>Jodhpur</option><option>Jorhat</option><option>Kadapa</option><option>Kadi</option><option>Kadiri</option><option>Kagaznagar</option><option>Kailasahar</option><option>Kaithal</option><option>Kakinada</option><option>Kalimpong</option><option>Kalpi</option><option>Kalyan-Dombivali</option><option>Kamareddy</option><option>Kancheepuram</option><option>Kandukur</option><option>Kanhangad</option><option>Kannur</option><option>Kanpur</option><option>Kapadvanj</option><option>Kapurthala</option><option>Karaikal</option><option>Karimganj</option><option>Karimnagar</option><option>Karjat</option><option>Karnal</option><option>Karur</option><option>Karwar</option><option>Kasaragod</option><option>Kashipur</option><option>KathUrban Agglomeration</option><option>Katihar</option><option>Kavali</option><option>Kayamkulam</option><option>Kendrapara</option><option>Kendujhar</option><option>Keshod</option><option>Khair</option><option>Khambhat</option><option>Khammam</option><option>Khanna</option><option>Kharagpur</option><option>Kharar</option><option>Khowai</option><option>Kishanganj</option><option>Kochi</option><option>Kodungallur</option><option>Kohima</option><option>Kolar</option><option>Kolkata</option><option>Kollam</option><option>Koratla</option><option>Korba</option><option>Kot Kapura</option><option>Kota</option><option>Kothagudem</option><option>Kottayam</option><option>Kovvur</option><option>Koyilandy</option><option>Kozhikode</option><option>Kunnamkulam</option><option>Kurnool</option><option>Kyathampalle</option><option>Lachhmangarh</option><option>Ladnu</option><option>Ladwa</option><option>Lahar</option><option>Laharpur</option><option>Lakheri</option><option>Lakhimpur</option><option>Lakhisarai</option><option>Lakshmeshwar</option><option>Lal Gopalganj Nindaura</option><option>Lalganj</option><option>Lalganj</option><option>Lalgudi</option><option>Lalitpur</option><option>Lalsot</option><option>Lanka</option><option>Lar</option><option>Lathi</option><option>Latur</option><option>Lilong</option><option>Limbdi</option><option>Lingsugur</option><option>Loha</option><option>Lohardaga</option><option>Lonar</option><option>Lonavla</option><option>Longowal</option><option>Loni</option><option>Losal</option><option>Lucknow</option><option>Ludhiana</option><option>Lumding</option><option>Lunawada</option><option>Lunglei</option><option>Macherla</option><option>Machilipatnam</option><option>Madanapalle</option><option>Maddur</option><option>Madhepura</option><option>Madhubani</option><option>Madhugiri</option><option>Madhupur</option><option>Madikeri</option><option>Madurai</option><option>Magadi</option><option>Mahad</option><option>Mahalingapura</option><option>Maharajganj</option><option>Maharajpur</option><option>Mahasamund</option><option>Mahbubnagar</option><option>Mahe</option><option>Mahemdabad</option><option>Mahendragarh</option><option>Mahesana</option><option>Mahidpur</option><option>Mahnar Bazar</option><option>Mahuva</option><option>Maihar</option><option>Mainaguri</option><option>Makhdumpur</option><option>Makrana</option><option>Malaj Khand</option><option>Malappuram</option><option>Malavalli</option><option>Malda</option><option>Malegaon</option><option>Malerkotla</option><option>Malkangiri</option><option>Malkapur</option><option>Malout</option><option>Malpura</option><option>Malur</option><option>Manachanallur</option><option>Manasa</option><option>Manavadar</option><option>Manawar</option><option>Mancherial</option><option>Mandalgarh</option><option>Mandamarri</option><option>Mandapeta</option><option>Mandawa</option><option>Mandi Dabwali</option><option>Mandi</option><option>Mandideep</option><option>Mandla</option><option>Mandsaur</option><option>Mandvi</option><option>Mandya</option><option>Manendragarh</option><option>Maner</option><option>Mangaldoi</option><option>Mangaluru</option><option>Mangalvedhe</option><option>Manglaur</option><option>Mangrol</option><option>Mangrol</option><option>Mangrulpir</option><option>Manihari</option><option>Manjlegaon</option><option>Mankachar</option><option>Manmad</option><option>Mansa</option><option>Mansa</option><option>Manuguru</option><option>Manvi</option><option>Manwath</option><option>Mapusa</option><option>Margao</option><option>Margherita</option><option>Marhaura</option><option>Mariani</option><option>Marigaon</option><option>Markapur</option><option>Marmagao</option><option>Masaurhi</option><option>Mathabhanga</option><option>Mathura</option><option>Mattannur</option><option>Mauganj</option><option>Mavelikkara</option><option>Mavoor</option><option>Mayang Imphal</option><option>Medak</option><option>Medininagar (Daltonganj)</option><option>Medinipur</option><option>Meerut</option><option>Mehkar</option><option>Memari</option><option>Merta City</option><option>Mhaswad</option><option>Mhow Cantonment</option><option>Mhowgaon</option><option>Mihijam</option><option>Mira-Bhayandar</option><option>Mirganj</option><option>Miryalaguda</option><option>Modasa</option><option>Modinagar</option><option>Moga</option><option>Mohali</option><option>Mokameh</option><option>Mokokchung</option><option>Monoharpur</option><option>Moradabad</option><option>Morena</option><option>Morinda, India</option><option>Morshi</option><option>Morvi</option><option>Motihari</option><option>Motipur</option><option>Mount Abu</option><option>Mudabidri</option><option>Mudalagi</option><option>Muddebihal</option><option>Mudhol</option><option>Mukerian</option><option>Mukhed</option><option>Muktsar</option><option>Mul</option><option>Mulbagal</option><option>Multai</option><option>Mumbai</option><option>Mundargi</option><option>Mundi</option><option>Mungeli</option><option>Munger</option><option>Murliganj</option><option>Murshidabad</option><option>Murtijapur</option><option>Murwara (Katni)</option><option>Musabani</option><option>Mussoorie</option><option>Muvattupuzha</option><option>Muzaffarpur</option><option>Mysore</option><option>Nabadwip</option><option>Nabarangapur</option><option>Nabha</option><option>Nadbai</option><option>Nadiad</option><option>Nagaon</option><option>Nagapattinam</option><option>Nagar</option><option>Nagari</option><option>Nagarkurnool</option><option>Nagaur</option><option>Nagda</option><option>Nagercoil</option><option>Nagina</option><option>Nagla</option><option>Nagpur</option><option>Nahan</option><option>Naharlagun</option><option>Naidupet</option><option>Naihati</option><option>Naila Janjgir</option><option>Nainital</option><option>Nainpur</option><option>Najibabad</option><option>Nakodar</option><option>Nakur</option><option>Nalbari</option><option>Namagiripettai</option><option>Namakkal</option><option>Nanded-Waghala</option><option>Nandgaon</option><option>Nandivaram-Guduvancheri</option><option>Nandura</option><option>Nandurbar</option><option>Nandyal</option><option>Nangal</option><option>Nanjangud</option><option>Nanjikottai</option><option>Nanpara</option><option>Narasapuram</option><option>Narasaraopet</option><option>Naraura</option><option>Narayanpet</option><option>Nargund</option><option>Narkatiaganj</option><option>Narkhed</option><option>Narnaul</option><option>Narsinghgarh</option><option>Narsinghgarh</option><option>Narsipatnam</option><option>Narwana</option><option>Nashik</option><option>Nasirabad</option><option>Natham</option><option>Nathdwara</option><option>Naugachhia</option><option>Naugawan Sadat</option><option>Nautanwa</option><option>Navalgund</option><option>Navsari</option><option>Nawabganj</option><option>Nawada</option><option>Nawanshahr</option><option>Nawapur</option><option>Nedumangad</option><option>Neem-Ka-Thana</option><option>Neemuch</option><option>Nehtaur</option><option>Nelamangala</option><option>Nellikuppam</option><option>Nellore</option><option>Nepanagar</option><option>New Delhi</option><option>Neyveli (TS)</option><option>Neyyattinkara</option><option>Nidadavole</option><option>Nilambur</option><option>Nilanga</option><option>Nimbahera</option><option>Nirmal</option><option>Niwai</option><option>Niwari</option><option>Nizamabad</option><option>Nohar</option><option>Noida</option><option>Nokha</option><option>Nokha</option><option>Nongstoin</option><option>Noorpur</option><option>North Lakhimpur</option><option>Nowgong</option><option>Nowrozabad (Khodargama)</option><option>Nuzvid</option><option>O' Valley</option><option>Obra</option><option>Oddanchatram</option><option>Ongole</option><option>Orai</option><option>Osmanabad</option><option>Ottappalam</option><option>Ozar</option><option>P.N.Patti</option><option>Pachora</option><option>Pachore</option><option>Pacode</option><option>Padmanabhapuram</option><option>Padra</option><option>Padrauna</option><option>Paithan</option><option>Pakaur</option><option>Palacole</option><option>Palai</option><option>Palakkad</option><option>Palampur</option><option>Palani</option><option>Palanpur</option><option>Palasa Kasibugga</option><option>Palghar</option><option>Pali</option><option>Pali</option><option>Palia Kalan</option><option>Palitana</option><option>Palladam</option><option>Pallapatti</option><option>Pallikonda</option><option>Palwal</option><option>Palwancha</option><option>Panagar</option><option>Panagudi</option><option>Panaji</option><option>Panamattom</option><option>Panchkula</option><option>Panchla</option><option>Pandharkaoda</option><option>Pandharpur</option><option>Pandhurna</option><option>PandUrban Agglomeration</option><option>Panipat</option><option>Panna</option><option>Panniyannur</option><option>Panruti</option><option>Panvel</option><option>Pappinisseri</option><option>Paradip</option><option>Paramakudi</option><option>Parangipettai</option><option>Parasi</option><option>Paravoor</option><option>Parbhani</option><option>Pardi</option><option>Parlakhemundi</option><option>Parli</option><option>Partur</option><option>Parvathipuram</option><option>Pasan</option><option>Paschim Punropara</option><option>Pasighat</option><option>Patan</option><option>Pathanamthitta</option><option>Pathankot</option><option>Pathardi</option><option>Pathri</option><option>Patiala</option><option>Patna</option><option>Patratu</option><option>Pattamundai</option><option>Patti</option><option>Pattran</option><option>Pattukkottai</option><option>Patur</option><option>Pauni</option><option>Pauri</option><option>Pavagada</option><option>Pedana</option><option>Peddapuram</option><option>Pehowa</option><option>Pen</option><option>Perambalur</option><option>Peravurani</option><option>Peringathur</option><option>Perinthalmanna</option><option>Periyakulam</option><option>Periyasemur</option><option>Pernampattu</option><option>Perumbavoor</option><option>Petlad</option><option>Phagwara</option><option>Phalodi</option><option>Phaltan</option><option>Phillaur</option><option>Phulabani</option><option>Phulera</option><option>Phulpur</option><option>Phusro</option><option>Pihani</option><option>Pilani</option><option>Pilibanga</option><option>Pilibhit</option><option>Pilkhuwa</option><option>Pindwara</option><option>Pinjore</option><option>Pipar City</option><option>Pipariya</option><option>Piriyapatna</option><option>Piro</option><option>Pithampur</option><option>Pithapuram</option><option>Pithoragarh</option><option>Pollachi</option><option>Polur</option><option>Pondicherry</option><option>Ponnani</option><option>Ponneri</option><option>Ponnur</option><option>Porbandar</option><option>Porsa</option><option>Port Blair</option><option>Powayan</option><option>Prantij</option><option>Pratapgarh</option><option>Pratapgarh</option><option>Prithvipur</option><option>Proddatur</option><option>Pudukkottai</option><option>Pudupattinam</option><option>Pukhrayan</option><option>Pulgaon</option><option>Puliyankudi</option><option>Punalur</option><option>Punch</option><option>Pune</option><option>Punganur</option><option>Punjaipugalur</option><option>Puranpur</option><option>Puri</option><option>Purna</option><option>Purnia</option><option>PurqUrban Agglomerationzi</option><option>Purulia</option><option>Purwa</option><option>Pusad</option><option>Puthuppally</option><option>Puttur</option><option>Puttur</option><option>Qadian</option><option>Raayachuru</option><option>Rabkavi Banhatti</option><option>Radhanpur</option><option>Rae Bareli</option><option>Rafiganj</option><option>Raghogarh-Vijaypur</option><option>Raghunathganj</option><option>Raghunathpur</option><option>Rahatgarh</option><option>Rahuri</option><option>Raiganj</option><option>Raigarh</option><option>Raikot</option><option>Raipur</option><option>Rairangpur</option><option>Raisen</option><option>Raisinghnagar</option><option>Rajagangapur</option><option>Rajahmundry</option><option>Rajakhera</option><option>Rajaldesar</option><option>Rajam</option><option>Rajampet</option><option>Rajapalayam</option><option>Rajauri</option><option>Rajgarh (Alwar)</option><option>Rajgarh (Churu)</option><option>Rajgarh</option><option>Rajgir</option><option>Rajkot</option><option>Rajnandgaon</option><option>Rajpipla</option><option>Rajpura</option><option>Rajsamand</option><option>Rajula</option><option>Rajura</option><option>Ramachandrapuram</option><option>Ramagundam</option><option>Ramanagaram</option><option>Ramanathapuram</option><option>Ramdurg</option><option>Rameshwaram</option><option>Ramganj Mandi</option><option>Ramgarh</option><option>Ramnagar</option><option>Ramnagar</option><option>Ramngarh</option><option>Rampur Maniharan</option><option>Rampur</option><option>Rampura Phul</option><option>Rampurhat</option><option>Ramtek</option><option>Ranaghat</option><option>Ranavav</option><option>Ranchi</option><option>Ranebennuru</option><option>Rangia</option><option>Rania</option><option>Ranibennur</option><option>Ranipet</option><option>Rapar</option><option>Rasipuram</option><option>Rasra</option><option>Ratangarh</option><option>Rath</option><option>Ratia</option><option>Ratlam</option><option>Ratnagiri</option><option>Rau</option><option>Raurkela</option><option>Raver</option><option>Rawatbhata</option><option>Rawatsar</option><option>Raxaul Bazar</option><option>Rayachoti</option><option>Rayadurg</option><option>Rayagada</option><option>Reengus</option><option>Rehli</option><option>Renigunta</option><option>Renukoot</option><option>Reoti</option><option>Repalle</option><option>Revelganj</option><option>Rewa</option><option>Rewari</option><option>Rishikesh</option><option>Risod</option><option>Robertsganj</option><option>Robertson Pet</option><option>Rohtak</option><option>Ron</option><option>Roorkee</option><option>Rosera</option><option>Rudauli</option><option>Rudrapur</option><option>Rudrapur</option><option>Rupnagar</option><option>Sabalgarh</option><option>Sadabad</option><option>Sadalagi</option><option>Sadasivpet</option><option>Sadri</option><option>Sadulpur</option><option>Sadulshahar</option><option>Safidon</option><option>Safipur</option><option>Sagar</option><option>Sagara</option><option>Sagwara</option><option>Saharanpur</option><option>Saharsa</option><option>Sahaspur</option><option>Sahaswan</option><option>Sahawar</option><option>Sahibganj</option><option>Sahjanwa</option><option>Saidpur</option><option>Saiha</option><option>Sailu</option><option>Sainthia</option><option>Sakaleshapura</option><option>Sakti</option><option>Salaya</option><option>Salem</option><option>Salur</option><option>Samalkha</option><option>Samalkot</option><option>Samana</option><option>Samastipur</option><option>Sambalpur</option><option>Sambhal</option><option>Sambhar</option><option>Samdhan</option><option>Samthar</option><option>Sanand</option><option>Sanawad</option><option>Sanchore</option><option>Sandi</option><option>Sandila</option><option>Sanduru</option><option>Sangamner</option><option>Sangareddy</option><option>Sangaria</option><option>Sangli</option><option>Sangole</option><option>Sangrur</option><option>Sankarankovil</option><option>Sankari</option><option>Sankeshwara</option><option>Santipur</option><option>Sarangpur</option><option>Sardarshahar</option><option>Sardhana</option><option>Sarni</option><option>Sarsod</option><option>Sasaram</option><option>Sasvad</option><option>Satana</option><option>Satara</option><option>Sathyamangalam</option><option>Satna</option><option>Sattenapalle</option><option>Sattur</option><option>Saunda</option><option>Saundatti-Yellamma</option><option>Sausar</option><option>Savanur</option><option>Savarkundla</option><option>Savner</option><option>Sawai Madhopur</option><option>Sawantwadi</option><option>Sedam</option><option>Sehore</option><option>Sendhwa</option><option>Seohara</option><option>Seoni</option><option>Seoni-Malwa</option><option>Shahabad</option><option>Shahabad, Hardoi</option><option>Shahabad, Rampur</option><option>Shahade</option><option>Shahbad</option><option>Shahdol</option><option>Shahganj</option><option>Shahjahanpur</option><option>Shahpur</option><option>Shahpura</option><option>Shahpura</option><option>Shajapur</option><option>Shamgarh</option><option>Shamli</option><option>Shamsabad, Agra</option><option>Shamsabad, Farrukhabad</option><option>Shegaon</option><option>Sheikhpura</option><option>Shendurjana</option><option>Shenkottai</option><option>Sheoganj</option><option>Sheohar</option><option>Sheopur</option><option>Sherghati</option><option>Sherkot</option><option>Shiggaon</option><option>Shikaripur</option><option>Shikarpur, Bulandshahr</option><option>Shikohabad</option><option>Shillong</option><option>Shimla</option><option>Shirdi</option><option>Shirpur-Warwade</option><option>Shirur</option><option>Shishgarh</option><option>Shivamogga</option><option>Shivpuri</option><option>Sholavandan</option><option>Sholingur</option><option>Shoranur</option><option>Shrigonda</option><option>Shrirampur</option><option>Shrirangapattana</option><option>Shujalpur</option><option>Siana</option><option>Sibsagar</option><option>Siddipet</option><option>Sidhi</option><option>Sidhpur</option><option>Sidlaghatta</option><option>Sihor</option><option>Sihora</option><option>Sikanderpur</option><option>Sikandra Rao</option><option>Sikandrabad</option><option>Sikar</option><option>Silao</option><option>Silapathar</option><option>Silchar</option><option>Siliguri</option><option>Sillod</option><option>Silvassa</option><option>Simdega</option><option>Sindagi</option><option>Sindhagi</option><option>Sindhnur</option><option>Singrauli</option><option>Sinnar</option><option>Sira</option><option>Sircilla</option><option>Sirhind Fatehgarh Sahib</option><option>Sirkali</option><option>Sirohi</option><option>Sironj</option><option>Sirsa</option><option>Sirsaganj</option><option>Sirsi</option><option>Sirsi</option><option>Siruguppa</option><option>Sitamarhi</option><option>Sitapur</option><option>Sitarganj</option><option>Sivaganga</option><option>Sivagiri</option><option>Sivakasi</option><option>Siwan</option><option>Sohagpur</option><option>Sohna</option><option>Sojat</option><option>Solan</option><option>Solapur</option><option>Sonamukhi</option><option>Sonepur</option><option>Songadh</option><option>Sonipat</option><option>Sopore</option><option>Soro</option><option>Soron</option><option>Soyagaon</option><option>Sri Madhopur</option><option>Srikakulam</option><option>Srikalahasti</option><option>Srinagar</option><option>Srinagar</option><option>Srinivaspur</option><option>Srirampore</option><option>Srisailam Project (Right Flank Colony) Township</option><option>Srivilliputhur</option><option>Sugauli</option><option>Sujangarh</option><option>Sujanpur</option><option>Sullurpeta</option><option>Sultanganj</option><option>Sultanpur</option><option>Sumerpur</option><option>Sumerpur</option><option>Sunabeda</option><option>Sunam</option><option>Sundargarh</option><option>Sundarnagar</option><option>Supaul</option><option>Surandai</option><option>Surapura</option><option>Surat</option><option>Suratgarh</option><option>SUrban Agglomerationr</option><option>Suri</option><option>Suriyampalayam</option><option>Suryapet</option><option>Tadepalligudem</option><option>Tadpatri</option><option>Takhatgarh</option><option>Taki</option><option>Talaja</option><option>Talcher</option><option>Talegaon Dabhade</option><option>Talikota</option><option>Taliparamba</option><option>Talode</option><option>Talwara</option><option>Tamluk</option><option>Tanda</option><option>Tandur</option><option>Tanuku</option><option>Tarakeswar</option><option>Tarana</option><option>Taranagar</option><option>Taraori</option><option>Tarbha</option><option>Tarikere</option><option>Tarn Taran</option><option>Tasgaon</option><option>Tehri</option><option>Tekkalakote</option><option>Tenali</option><option>Tenkasi</option><option>Tenu dam-cum-Kathhara</option><option>Terdal</option><option>Tezpur</option><option>Thakurdwara</option><option>Thammampatti</option><option>Thana Bhawan</option><option>Thane</option><option>Thanesar</option><option>Thangadh</option><option>Thanjavur</option><option>Tharad</option><option>Tharamangalam</option><option>Tharangambadi</option><option>Theni Allinagaram</option><option>Thirumangalam</option><option>Thirupuvanam</option><option>Thiruthuraipoondi</option><option>Thiruvalla</option><option>Thiruvallur</option><option>Thiruvananthapuram</option><option>Thiruvarur</option><option>Thodupuzha</option><option>Thoubal</option><option>Thrissur</option><option>Thuraiyur</option><option>Tikamgarh</option><option>Tilda Newra</option><option>Tilhar</option><option>Tindivanam</option><option>Tinsukia</option><option>Tiptur</option><option>Tirora</option><option>Tiruchendur</option><option>Tiruchengode</option><option>Tiruchirappalli</option><option>Tirukalukundram</option><option>Tirukkoyilur</option><option>Tirunelveli</option><option>Tirupathur</option><option>Tirupathur</option><option>Tirupati</option><option>Tiruppur</option><option>Tirur</option><option>Tiruttani</option><option>Tiruvannamalai</option><option>Tiruvethipuram</option><option>Tiruvuru</option><option>Tirwaganj</option><option>Titlagarh</option><option>Tittakudi</option><option>Todabhim</option><option>Todaraisingh</option><option>Tohana</option><option>Tonk</option><option>Tuensang</option><option>Tuljapur</option><option>Tulsipur</option><option>Tumkur</option><option>Tumsar</option><option>Tundla</option><option>Tuni</option><option>Tura</option><option>Uchgaon</option><option>Udaipur</option><option>Udaipur</option><option>Udaipurwati</option><option>Udgir</option><option>Udhagamandalam</option><option>Udhampur</option><option>Udumalaipettai</option><option>Udupi</option><option>Ujhani</option><option>Ujjain</option><option>Umarga</option><option>Umaria</option><option>Umarkhed</option><option>Umbergaon</option><option>Umred</option><option>Umreth</option><option>Una</option><option>Unjha</option><option>Unnamalaikadai</option><option>Unnao</option><option>Upleta</option><option>Uran Islampur</option><option>Uran</option><option>Uravakonda</option><option>Urmar Tanda</option><option>Usilampatti</option><option>Uthamapalayam</option><option>Uthiramerur</option><option>Utraula</option><option>Vadakkuvalliyur</option><option>Vadalur</option><option>Vadgaon Kasba</option><option>Vadipatti</option><option>Vadnagar</option><option>Vadodara</option><option>Vaijapur</option><option>Vaikom</option><option>Valparai</option><option>Valsad</option><option>Vandavasi</option><option>Vaniyambadi</option><option>Vapi</option><option>Vapi</option><option>Varanasi</option><option>Varkala</option><option>Vasai-Virar</option><option>Vatakara</option><option>Vedaranyam</option><option>Vellakoil</option><option>Vellore</option><option>Venkatagiri</option><option>Veraval</option><option>Vidisha</option><option>Vijainagar, Ajmer</option><option>Vijapur</option><option>Vijayapura</option><option>Vijayawada</option><option>Vijaypur</option><option>Vikarabad</option><option>Vikramasingapuram</option><option>Viluppuram</option><option>Vinukonda</option><option>Viramgam</option><option>Virudhachalam</option><option>Virudhunagar</option><option>Visakhapatnam</option><option>Visnagar</option><option>Viswanatham</option><option>Vita</option><option>Vizianagaram</option><option>Vrindavan</option><option>Vyara</option><option>Wadgaon Road</option><option>Wadhwan</option><option>Wadi</option><option>Wai</option><option>Wanaparthy</option><option>Wani</option><option>Wankaner</option><option>Wara Seoni</option><option>Warangal</option><option>Wardha</option><option>Warhapur</option><option>Warisaliganj</option><option>Warora</option><option>Warud</option><option>Washim</option><option>Wokha</option><option>Yadgir</option><option>Yamunanagar</option><option>Yanam</option><option>Yavatmal</option><option>Yawal</option><option>Yellandu</option><option>Yemmiganur</option><option>Yerraguntla</option><option>Yevla</option><option>Zaidpur</option><option>Zamania</option><option>Zira</option><option>Zirakpur</option><option>Zunheboto</option>
            </select>
            <!-- <select name='company_location' type="text" class="form-select input_validity">
                <option value="Delhi">Manufactring</option>
                <option value="Noida">Service</option>
                <option value="Wholesaler">Wholesaler</option>
                <option value="Retailer">Retailer</option>
                <option value="Trader">Trader</option>
                <option value="Other" selected>Other</option>
            </select> -->
            <!-- <input name='company_location' type="text" class="form-control input_validity"> -->
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <label class="mb-1">Services</label>
            <select name='service' type="text" class="form-select input_validity">
                <option value="">Select your Service</option>
                <option value="Manufactring">Manufactring</option>
                <option value="Service">Service</option>
                <option value="Wholesaler">Wholesaler</option>
                <option value="Retailer">Retailer</option>
                <option value="Trader">Trader</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="col-md-6 mb-4">
            <label class="mb-1">Logo Upload</label>
            <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" id="imageUpload" class="form-control input_validity">
            <!-- <label class="mb-1 mt-3">Logo Preview</label> -->
            <div class="avatar-preview">
                <div id="imagePreview" style="background-image: url();">
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <label class="mb-1">Description</label>
            <textarea name='description' type="text-area" rows="11" class="form-control"></textarea>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <label class="mb-1">Website</label>
            <input name='website_name' type="text" class="form-control">
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <label class="mb-1">Twitter link</label>
            <input name='twitter' type="text" class="form-control">
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <label class="mb-1">Facebook link</label>
            <input name='facebook' type="text" class="form-control">
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <label class="mb-1">Linkedin Link</label>
            <input name='linkedin' type="text" class="form-control">
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <label class="mb-1">Youtube Link</label>
            <input name='youtube' type="text" class="form-control">
        </div>
        <div id='error' class="max-content mx-auto mt-3 text-dark"></div>
      </div>
        <!-- <h3>Company Bio:</h3>
        <div class="row my-2">
            <div class="col-md-6">
                <label class="mb-1">Logo Upload</label>
                <input name="name" id="imageUpload" accept=".png, .jpg, .jpeg" type="file" class="form-control input_validity">
                <label class="mb-1 mt-3">Logo Preview</label>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url();">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label class="mb-1">Description</label>
                <textarea name='name' type="text-area" rows="12" class="form-control input_validity"></textarea>
            </div> -->
            <!-- <div class="col-md-6 col-lg-4 mb-4">
            </div> -->
        <!-- </div> -->
    </div>
    <div style="overflow:auto;">
        <div style="float:right;">
        <!-- <button type="button" class="rounded-2" id="prevBtn" onclick="nextPrev(-1)">Previous</button> -->
        <!-- <button type="button" class="rounded-2" id="nextBtn" onclick="nextPrev(1)">Next</button> -->
        <!-- <input class="btn btn-primary rounded-2" type="submit" value="Upload"> -->
        <input type="submit" name="submit" class="rounded-2" id="submit" value ="Submit">
        </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <!-- <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
    </div> -->
  </div>
</form>
<input type="hidden" id="ajax_res" value="">
<div class="py-5 my-1"></div>
<script>
// var currentTab = 0; // Current tab is set to be the first tab (0)
// showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    ajax_call('form_validation');
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}


function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

</script>
<script>
$(document).ready(function(e){
  $("#add_member").on('submit',(function(e) {
    e.preventDefault();
    var files = $('#imageUpload')[0].files;
    var data = new FormData(this);
   if (!image_validation || !validateForm()){
      $('#error').html('Please Fill all Fields!');
      setTimeout(() => {
      $('#error').html('');
      }, 2000);
     // return false;
    } else {
      ajax_call1(data,'add_member');
    // if (!$('#ajax_res').val()=='') {
      // $('#error').html('Your Profile Has Been Created');
      setTimeout(() => {
        window.location.href="/<?=$main_url?>/member_profile/"+$('#owner_phone').val();
      }, 3000);   
   }
  }));
});

var readURL=(input)=> {
  if (input.files && input.files[0]) {
    const maxAllowedSize = 2 * 1024 * 1024;
    var reader = new FileReader();
    reader.onload = function(e) {
        const img_name = input.files[0].name;
        const lastDot = img_name.lastIndexOf('.');
        const ext = img_name.substring(lastDot + 1);
        // extension.value = ext;
        $('#imagePreview').css('background-image', 'url('+e.target.result +')');
        $('#imagePreview').hide();
        $('#imagePreview').fadeIn(650);
        console.log(maxAllowedSize);
        console.log(ext);
        console.log(input.files[0].size);
        if (input.files[0].size > maxAllowedSize) {
          // Here you can ask your users to load correct file
          e.target.value = '';
          $('#error').html('File Size must be less then 2mb in size');
          setTimeout(() => {
          $('#error').html('');
          }, 2000);
          image_validation = false;
          // return false;
        }
        else if(ext!='png' && ext!='jpg' && ext!='jpeg') {
          e.target.value = '';
          $('#error').html('File must be in JPEG, JPG or PNG');
          setTimeout(() => {
          $('#error').html('');
          }, 2000);
          image_validation = false;
        }
        else {
          image_validation = true;
        }
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload").change(function() {
  readURL(this);
});

var currentTab = 0;
function validateForm() {
  var x, y, i;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByClassName("input_validity");
  for (i = 0; i < y.length; i++) {
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      setTimeout(() => {
        y[i].classList.remove("invalid");
      }, 3000);
      // and set the current valid status to false
      valid = false;
      break;
    } else {
      valid = true;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  // if (valid) {
  //   document.getElementsByClassName("step")[currentTab].className += "finish";
  // }
  return valid; // return the valid status
}
</script>