<?php
if(isset($_SESSION['username'])){


	class OverWrite{
/* 1 */
		private $username;
		private $password;
		private $site_url;
		private $site_title;
		private $youtube_key;
		private $youtube_key_2;
		private $youtube_key_3;
		private $youtube_key_4;
		private $youtube_key_5;
		private $youtube_key_6;
		private $youtube_key_7;
		private $youtube_key_8;
		private $youtube_key_9;
		private $youtube_key_10;
		private $addthis_id;
		private $contact_email;
		private $site_theme;
		private $home_chart_country;
		private $home_chart_genreid;
		private $nr_search_result;
		private $use_ssl_images;
		private $show_vid_embed;
		private $show_down_but;
		private $show_vid_descr;
		private $show_rel_searches;
		private $homepage_title;
		private $homepage_desc;
		private $search_seo_title;
		private $videopage_title;
		private $chart_pre_title;
		private $chart_aft_title;
		private $head_code;
		private $home_ad_728;
		private $chart_ad_728;
		private $search_ad_728;
		private $down_ad_728;
		private $downmod_ad_300;
		private $home_welcome_title;
		private $home_searches_title;
		private $home_chart_title;
		private $home_chartbut_title;
		private $searchresults_title;
		private $search_noresults_title;
		private $search_play_but;
		private $search_stop_but;
		private $search_down_but;
		private $search_nav_prev;
		private $search_nav_next;
		private $vid_down_but;
		private $vid_recen_title;
		private $searchf_text;
		private $all_gtitle;
		private $gtitle_1;
		private $gtitle_2;
		private $gtitle_3;
		private $gtitle_4;
		private $gtitle_5;
		private $gtitle_6;
		private $gtitle_7;
		private $gtitle_8;
		private $gtitle_9;
		private $gtitle_10;
		private $gtitle_11;
		private $gtitle_12;
		private $gtitle_13;
		private $gtitle_14;
		private $gtitle_15;
		private $gtitle_16;
		private $gtitle_17;
		private $gtitle_18;
		private $gtitle_19;
		private $gtitle_20;
		private $gtitle_21;
		private $gtitle_22;
		private $gtitle_23;
		private $gtitle_24;
		private $gtitle_25;
		private $gtitle_26;
		private $gtitle_27;
		private $gtitle_28;
		private $gtitle_29;
		private $gtitle_30;
		private $gtitle_31;
		private $gtitle_32;
		private $gtitle_33;
		private $gtitle_34;
		private $gtitle_35;
		private $gtitle_36;
		private $gtitle_37;
		private $gtitle_38;
		private $gtitle_39;
		private $gtitle_40;
		private $gtitle_41;
		private $footnav_home;
		private $footnav_privacy;
		private $footnav_dmca;
		private $footnav_contact;
		
/* 2 */
		function Write($username,$password,$site_url,$site_title,$youtube_key,$youtube_key_2,$youtube_key_3,$youtube_key_4,$youtube_key_5,$youtube_key_6,$youtube_key_7,$youtube_key_8,$youtube_key_9,$youtube_key_10,$addthis_id,$contact_email,$site_theme,$home_chart_country,$home_chart_genreid,
		$nr_search_result,$use_ssl_images,$show_vid_embed,$show_down_but,$show_vid_descr,$show_rel_searches,$homepage_title,$homepage_desc,$search_seo_title,
		$videopage_title,$chart_pre_title,$chart_aft_title,$head_code,$home_ad_728,$chart_ad_728,$search_ad_728,$down_ad_728,$downmod_ad_300,$home_welcome_title,$home_searches_title,$home_chart_title,$home_chartbut_title,$searchresults_title,
		$search_noresults_title,$search_play_but,$search_stop_but,$search_down_but,$search_nav_prev,$search_nav_next,$vid_down_but,$vid_recen_title,$searchf_text,
		$all_gtitle,$gtitle_1,$gtitle_2,$gtitle_3,$gtitle_4,$gtitle_5,$gtitle_6,$gtitle_7,$gtitle_8,$gtitle_9,$gtitle_10,$gtitle_11,$gtitle_12,$gtitle_13,$gtitle_14,
		$gtitle_15,$gtitle_16,$gtitle_17,$gtitle_18,$gtitle_19,$gtitle_20,$gtitle_21,$gtitle_22,$gtitle_23,$gtitle_24,$gtitle_25,$gtitle_26,$gtitle_27,$gtitle_28,
		$gtitle_29,$gtitle_30,$gtitle_31,$gtitle_32,$gtitle_33,$gtitle_34,$gtitle_35,$gtitle_36,$gtitle_37,$gtitle_38,$gtitle_39,$gtitle_40,$gtitle_41,$footnav_home,$footnav_privacy,
		$footnav_dmca,$footnav_contact){

			$this->username=$username;
			$this->password=$password;
			$this->site_url=$site_url;
			$this->site_title=$site_title;
			//$this->youtube_key=$youtube_key;
			//$this->addthis_id=$addthis_id;
			//$this->contact_email=$contact_email;
			$this->site_theme=$site_theme;
			$this->home_chart_country=$home_chart_country;
			$this->home_chart_genreid=$home_chart_genreid;
			$this->nr_search_result=$nr_search_result;
			$this->use_ssl_images=$use_ssl_images;
			$this->show_vid_embed=$show_vid_embed;
			$this->show_down_but=$show_down_but;
			$this->show_vid_descr=$show_vid_descr;
			$this->show_rel_searches=$show_rel_searches;
			$this->homepage_title=$homepage_title;
			$this->homepage_desc=$homepage_desc;
			//$this->search_seo_title=$search_seo_title;
			//$this->videopage_title=$videopage_title;
			//$this->chart_pre_title=$chart_pre_title;
			//$this->chart_aft_title=$chart_aft_title;
			//$this->head_code=$head_code;
			//$this->home_ad_728=$home_ad_728;
			//$this->chart_ad_728=$chart_ad_728;
			//$this->search_ad_728=$search_ad_728;
			//$this->down_ad_728=$down_ad_728;
			//$this->downmod_ad_300=$downmod_ad_300;
			$this->home_welcome_title=$home_welcome_title;
			$this->home_searches_title=$home_searches_title;
			$this->home_chart_title=$home_chart_title;
			$this->home_chartbut_title=$home_chartbut_title;
			$this->searchresults_title=$searchresults_title;
			$this->search_noresults_title=$search_noresults_title;
			$this->search_play_but=$search_play_but;
			$this->search_stop_but=$search_stop_but;
			$this->search_down_but=$search_down_but;
			$this->search_nav_prev=$search_nav_prev;
			$this->search_nav_next=$search_nav_next;
			$this->vid_down_but=$vid_down_but;
			$this->vid_recen_title=$vid_recen_title;
			$this->searchf_text=$searchf_text;
			$this->all_gtitle=$all_gtitle;
			$this->gtitle_1=$gtitle_1;
			$this->gtitle_2=$gtitle_2;
			$this->gtitle_3=$gtitle_3;
			$this->gtitle_4=$gtitle_4;
			$this->gtitle_5=$gtitle_5;
			$this->gtitle_6=$gtitle_6;
			$this->gtitle_7=$gtitle_7;
			$this->gtitle_8=$gtitle_8;
			$this->gtitle_9=$gtitle_9;
			$this->gtitle_10=$gtitle_10;
			$this->gtitle_11=$gtitle_11;
			$this->gtitle_12=$gtitle_12;
			$this->gtitle_13=$gtitle_13;
			$this->gtitle_14=$gtitle_14;
			$this->gtitle_15=$gtitle_15;
			$this->gtitle_16=$gtitle_16;
			$this->gtitle_17=$gtitle_17;
			$this->gtitle_18=$gtitle_18;
			$this->gtitle_19=$gtitle_19;
			$this->gtitle_20=$gtitle_20;
			$this->gtitle_21=$gtitle_21;
			$this->gtitle_22=$gtitle_22;
			$this->gtitle_23=$gtitle_23;
			$this->gtitle_24=$gtitle_24;
			$this->gtitle_25=$gtitle_25;
			$this->gtitle_26=$gtitle_26;
			$this->gtitle_27=$gtitle_27;
			$this->gtitle_28=$gtitle_28;
			$this->gtitle_29=$gtitle_29;
			$this->gtitle_30=$gtitle_30;
			$this->gtitle_31=$gtitle_31;
			$this->gtitle_32=$gtitle_32;
			$this->gtitle_33=$gtitle_33;
			$this->gtitle_34=$gtitle_34;
			$this->gtitle_35=$gtitle_35;
			$this->gtitle_36=$gtitle_36;
			$this->gtitle_37=$gtitle_37;
			$this->gtitle_38=$gtitle_38;
			$this->gtitle_39=$gtitle_39;
			$this->gtitle_40=$gtitle_40;
			$this->gtitle_41=$gtitle_41;
			$this->footnav_home=$footnav_home;
			$this->footnav_privacy=$footnav_privacy;
			$this->footnav_dmca=$footnav_dmca;
			$this->footnav_contact=$footnav_contact;
			
/* 3 */
			if(!empty($_POST['username'])){
			$this->username=$_POST['username'];
			}
			if(!empty($_POST['newpassword'])){
			$this->password=$_POST['newpassword'];
			}
			if(!empty($_POST['site_url'])){
			$this->site_url=$_POST['site_url'];
			}
			if(!empty($_POST['site_title'])){
			$this->site_title=$_POST['site_title'];
			}
			
			$this->youtube_key=$_POST['youtube_key'];
			$this->youtube_key_2=$_POST['youtube_key_2'];
			$this->youtube_key_3=$_POST['youtube_key_3'];
			$this->youtube_key_4=$_POST['youtube_key_4'];
			$this->youtube_key_5=$_POST['youtube_key_5'];
			$this->youtube_key_6=$_POST['youtube_key_6'];
			$this->youtube_key_7=$_POST['youtube_key_7'];
			$this->youtube_key_8=$_POST['youtube_key_8'];
			$this->youtube_key_9=$_POST['youtube_key_9'];
			$this->youtube_key_10=$_POST['youtube_key_10'];
			
			
			$this->addthis_id=$_POST['addthis_id'];
			
			
			$this->contact_email=$_POST['contact_email'];
			
			if(!empty($_POST['site_theme'])){
			$this->site_theme=$_POST['site_theme'];
			}
			if(!empty($_POST['home_chart_country'])){
			$this->home_chart_country=$_POST['home_chart_country'];
			}
			if(!empty($_POST['home_chart_genreid'])){
			$this->home_chart_genreid=$_POST['home_chart_genreid'];
			}
			if(!empty($_POST['nr_search_result'])){
			$this->nr_search_result=$_POST['nr_search_result'];
			}
			if(!empty($_POST['use_ssl_images'])){
			$this->use_ssl_images='1';
			} else {
			$this->use_ssl_images='0';
			}
			if(!empty($_POST['show_vid_embed'])){
			$this->show_vid_embed='1';
			} else {
			$this->show_vid_embed='0';
			}
			if(!empty($_POST['show_down_but'])){
			$this->show_down_but='1';
			} else {
			$this->show_down_but='0';
			}
			if(!empty($_POST['show_vid_descr'])){
			$this->show_vid_descr='1';
			} else {
			$this->show_vid_descr='0';
			}
			if(!empty($_POST['show_rel_searches'])){
			$this->show_rel_searches='1';
			} else {
			$this->show_rel_searches='0';
			}
			if(!empty($_POST['homepage_title'])){
			$this->homepage_title=$_POST['homepage_title'];
			}
			if(!empty($_POST['homepage_desc'])){
			$this->homepage_desc=$_POST['homepage_desc'];
			}
			
			$this->search_seo_title=$_POST['search_seo_title'];
			
			
			$this->videopage_title=$_POST['videopage_title'];
			
			
			$this->chart_pre_title=$_POST['chart_pre_title'];
			
			
			$this->chart_aft_title=$_POST['chart_aft_title'];
			
			if(!empty($_POST['head_code'])){
			$this->head_code=$_POST['head_code'];
			$this->head_code = str_replace('"', '@', $this->head_code);
			} else {
			$this->head_code=$_POST['head_code'];
			}
			if(!empty($_POST['home_ad_728'])){
			$this->home_ad_728=$_POST['home_ad_728'];
			$this->home_ad_728 = str_replace('"', '@', $this->home_ad_728);
			} else {
			$this->home_ad_728=$_POST['home_ad_728'];
			}
			if(!empty($_POST['chart_ad_728'])){
			$this->chart_ad_728=$_POST['chart_ad_728'];
			$this->chart_ad_728 = str_replace('"', '@', $this->chart_ad_728);
			} else {
			$this->chart_ad_728=$_POST['chart_ad_728'];
			}
			if(!empty($_POST['search_ad_728'])){
			$this->search_ad_728=$_POST['search_ad_728'];
			$this->search_ad_728 = str_replace('"', '@', $this->search_ad_728);
			} else {
			$this->search_ad_728=$_POST['search_ad_728'];
			}
			if(!empty($_POST['down_ad_728'])){
			$this->down_ad_728=$_POST['down_ad_728'];
			$this->down_ad_728 = str_replace('"', '@', $this->down_ad_728);
			} else {
			$this->down_ad_728=$_POST['down_ad_728'];
			}
			if(!empty($_POST['downmod_ad_300'])){
			$this->downmod_ad_300=$_POST['downmod_ad_300'];
			$this->downmod_ad_300 = str_replace('"', '@', $this->downmod_ad_300);
			} else {
			$this->downmod_ad_300=$_POST['downmod_ad_300'];
			}
			if(!empty($_POST['home_welcome_title'])){
			$this->home_welcome_title=$_POST['home_welcome_title'];
			}
			if(!empty($_POST['home_searches_title'])){
			$this->home_searches_title=$_POST['home_searches_title'];
			}
			if(!empty($_POST['home_chart_title'])){
			$this->home_chart_title=$_POST['home_chart_title'];
			}
			if(!empty($_POST['home_chartbut_title'])){
			$this->home_chartbut_title=$_POST['home_chartbut_title'];
			}
			if(!empty($_POST['searchresults_title'])){
			$this->searchresults_title=$_POST['searchresults_title'];
			}
			if(!empty($_POST['search_noresults_title'])){
			$this->search_noresults_title=$_POST['search_noresults_title'];
			}
			if(!empty($_POST['search_play_but'])){
			$this->search_play_but=$_POST['search_play_but'];
			}
			if(!empty($_POST['search_stop_but'])){
			$this->search_stop_but=$_POST['search_stop_but'];
			}
			if(!empty($_POST['search_down_but'])){
			$this->search_down_but=$_POST['search_down_but'];
			}
			if(!empty($_POST['search_nav_prev'])){
			$this->search_nav_prev=$_POST['search_nav_prev'];
			}
			if(!empty($_POST['search_nav_next'])){
			$this->search_nav_next=$_POST['search_nav_next'];
			}
			if(!empty($_POST['vid_down_but'])){
			$this->vid_down_but=$_POST['vid_down_but'];
			}
			if(!empty($_POST['vid_recen_title'])){
			$this->vid_recen_title=$_POST['vid_recen_title'];
			}
			if(!empty($_POST['searchf_text'])){
			$this->searchf_text=$_POST['searchf_text'];
			}
			if(!empty($_POST['all_gtitle'])){
			$this->all_gtitle=$_POST['all_gtitle'];
			}
			if(!empty($_POST['gtitle_1'])){
			$this->gtitle_1=$_POST['gtitle_1'];
			}
			if(!empty($_POST['gtitle_2'])){
			$this->gtitle_2=$_POST['gtitle_2'];
			}
			if(!empty($_POST['gtitle_3'])){
			$this->gtitle_3=$_POST['gtitle_3'];
			}
			if(!empty($_POST['gtitle_4'])){
			$this->gtitle_4=$_POST['gtitle_4'];
			}
			if(!empty($_POST['gtitle_5'])){
			$this->gtitle_5=$_POST['gtitle_5'];
			}
			if(!empty($_POST['gtitle_6'])){
			$this->gtitle_6=$_POST['gtitle_6'];
			}
			if(!empty($_POST['gtitle_7'])){
			$this->gtitle_7=$_POST['gtitle_7'];
			}
			if(!empty($_POST['gtitle_8'])){
			$this->gtitle_8=$_POST['gtitle_8'];
			}
			if(!empty($_POST['gtitle_9'])){
			$this->gtitle_9=$_POST['gtitle_9'];
			}
			if(!empty($_POST['gtitle_10'])){
			$this->gtitle_10=$_POST['gtitle_10'];
			}
			if(!empty($_POST['gtitle_11'])){
			$this->gtitle_11=$_POST['gtitle_11'];
			}
			if(!empty($_POST['gtitle_12'])){
			$this->gtitle_12=$_POST['gtitle_12'];
			}
			if(!empty($_POST['gtitle_13'])){
			$this->gtitle_13=$_POST['gtitle_13'];
			}
			if(!empty($_POST['gtitle_14'])){
			$this->gtitle_14=$_POST['gtitle_14'];
			}
			if(!empty($_POST['gtitle_15'])){
			$this->gtitle_15=$_POST['gtitle_15'];
			}
			if(!empty($_POST['gtitle_16'])){
			$this->gtitle_16=$_POST['gtitle_16'];
			}
			if(!empty($_POST['gtitle_17'])){
			$this->gtitle_17=$_POST['gtitle_17'];
			}
			if(!empty($_POST['gtitle_18'])){
			$this->gtitle_18=$_POST['gtitle_18'];
			}
			if(!empty($_POST['gtitle_19'])){
			$this->gtitle_19=$_POST['gtitle_19'];
			}
			if(!empty($_POST['gtitle_20'])){
			$this->gtitle_20=$_POST['gtitle_20'];
			}
			if(!empty($_POST['gtitle_21'])){
			$this->gtitle_21=$_POST['gtitle_21'];
			}
			if(!empty($_POST['gtitle_22'])){
			$this->gtitle_22=$_POST['gtitle_22'];
			}
			if(!empty($_POST['gtitle_23'])){
			$this->gtitle_23=$_POST['gtitle_23'];
			}
			if(!empty($_POST['gtitle_24'])){
			$this->gtitle_24=$_POST['gtitle_24'];
			}
			if(!empty($_POST['gtitle_25'])){
			$this->gtitle_25=$_POST['gtitle_25'];
			}
			if(!empty($_POST['gtitle_26'])){
			$this->gtitle_26=$_POST['gtitle_26'];
			}
			if(!empty($_POST['gtitle_27'])){
			$this->gtitle_27=$_POST['gtitle_27'];
			}
			if(!empty($_POST['gtitle_28'])){
			$this->gtitle_28=$_POST['gtitle_28'];
			}
			if(!empty($_POST['gtitle_29'])){
			$this->gtitle_29=$_POST['gtitle_29'];
			}
			if(!empty($_POST['gtitle_30'])){
			$this->gtitle_30=$_POST['gtitle_30'];
			}
			if(!empty($_POST['gtitle_31'])){
			$this->gtitle_31=$_POST['gtitle_31'];
			}
			if(!empty($_POST['gtitle_32'])){
			$this->gtitle_32=$_POST['gtitle_32'];
			}
			if(!empty($_POST['gtitle_33'])){
			$this->gtitle_33=$_POST['gtitle_33'];
			}
			if(!empty($_POST['gtitle_34'])){
			$this->gtitle_34=$_POST['gtitle_34'];
			}
			if(!empty($_POST['gtitle_35'])){
			$this->gtitle_35=$_POST['gtitle_35'];
			}
			if(!empty($_POST['gtitle_36'])){
			$this->gtitle_36=$_POST['gtitle_36'];
			}
			if(!empty($_POST['gtitle_37'])){
			$this->gtitle_37=$_POST['gtitle_37'];
			}
			if(!empty($_POST['gtitle_38'])){
			$this->gtitle_38=$_POST['gtitle_38'];
			}
			if(!empty($_POST['gtitle_39'])){
			$this->gtitle_39=$_POST['gtitle_39'];
			}
			if(!empty($_POST['gtitle_40'])){
			$this->gtitle_40=$_POST['gtitle_40'];
			}
			if(!empty($_POST['gtitle_41'])){
			$this->gtitle_41=$_POST['gtitle_41'];
			}
			if(!empty($_POST['footnav_home'])){
			$this->footnav_home=$_POST['footnav_home'];
			}
			if(!empty($_POST['footnav_privacy'])){
			$this->footnav_privacy=$_POST['footnav_privacy'];
			}
			if(!empty($_POST['footnav_dmca'])){
			$this->footnav_dmca=$_POST['footnav_dmca'];
			}
			if(!empty($_POST['footnav_contact'])){
			$this->footnav_contact=$_POST['footnav_contact'];
			}
			
/* 4 */
			$data = '<?php  
			$username="'.$this->username.'"; 
			$password="'.$this->password.'"; 
			$site_url="'.$this->site_url.'"; 
			$site_title="'.$this->site_title.'"; 
			$youtube_key="'.$this->youtube_key.'";
			$youtube_key_2="'.$this->youtube_key_2.'";
			$youtube_key_3="'.$this->youtube_key_3.'";
			$youtube_key_4="'.$this->youtube_key_4.'";
			$youtube_key_5="'.$this->youtube_key_5.'";
			$youtube_key_6="'.$this->youtube_key_6.'";
			$youtube_key_7="'.$this->youtube_key_7.'";
			$youtube_key_8="'.$this->youtube_key_8.'";
			$youtube_key_9="'.$this->youtube_key_9.'";
			$youtube_key_10="'.$this->youtube_key_10.'";
			$addthis_id="'.$this->addthis_id.'"; 
			$contact_email="'.$this->contact_email.'";
			$site_theme="'.$this->site_theme.'";			
			$home_chart_country="'.$this->home_chart_country.'"; 
			$home_chart_genreid="'.$this->home_chart_genreid.'"; 
			$nr_search_result="'.$this->nr_search_result.'"; 
			$use_ssl_images="'.$this->use_ssl_images.'";
			$show_vid_embed="'.$this->show_vid_embed.'";
			$show_down_but="'.$this->show_down_but.'";
			$show_vid_descr="'.$this->show_vid_descr.'";
			$show_rel_searches="'.$this->show_rel_searches.'";
			$homepage_title="'.$this->homepage_title.'";
			$homepage_desc="'.$this->homepage_desc.'";
			$search_seo_title="'.$this->search_seo_title.'";
			$videopage_title="'.$this->videopage_title.'";
			$chart_pre_title="'.$this->chart_pre_title.'";
			$chart_aft_title="'.$this->chart_aft_title.'";
			$head_code="'.$this->head_code.'";
			$home_ad_728="'.$this->home_ad_728.'";
			$chart_ad_728="'.$this->chart_ad_728.'";
			$search_ad_728="'.$this->search_ad_728.'";
			$down_ad_728="'.$this->down_ad_728.'";
			$downmod_ad_300="'.$this->downmod_ad_300.'";
			$home_welcome_title="'.$this->home_welcome_title.'";
			$home_searches_title="'.$this->home_searches_title.'";
			$home_chart_title="'.$this->home_chart_title.'";
			$home_chartbut_title="'.$this->home_chartbut_title.'";
			$searchresults_title="'.$this->searchresults_title.'";
			$search_noresults_title="'.$this->search_noresults_title.'";
			$search_play_but="'.$this->search_play_but.'";
			$search_stop_but="'.$this->search_stop_but.'";
			$search_down_but="'.$this->search_down_but.'";
			$search_nav_prev="'.$this->search_nav_prev.'";
			$search_nav_next="'.$this->search_nav_next.'";
			$vid_down_but="'.$this->vid_down_but.'";
			$vid_recen_title="'.$this->vid_recen_title.'";
			$searchf_text="'.$this->searchf_text.'";
			$all_gtitle="'.$this->all_gtitle.'";
			$gtitle_1="'.$this->gtitle_1.'";
			$gtitle_2="'.$this->gtitle_2.'";
			$gtitle_3="'.$this->gtitle_3.'";
			$gtitle_4="'.$this->gtitle_4.'";
			$gtitle_5="'.$this->gtitle_5.'";
			$gtitle_6="'.$this->gtitle_6.'";
			$gtitle_7="'.$this->gtitle_7.'";
			$gtitle_8="'.$this->gtitle_8.'";
			$gtitle_9="'.$this->gtitle_9.'";
			$gtitle_10="'.$this->gtitle_10.'";
			$gtitle_11="'.$this->gtitle_11.'";
			$gtitle_12="'.$this->gtitle_12.'";
			$gtitle_13="'.$this->gtitle_13.'";
			$gtitle_14="'.$this->gtitle_14.'";
			$gtitle_15="'.$this->gtitle_15.'";
			$gtitle_16="'.$this->gtitle_16.'";
			$gtitle_17="'.$this->gtitle_17.'";
			$gtitle_18="'.$this->gtitle_18.'";
			$gtitle_19="'.$this->gtitle_19.'";
			$gtitle_20="'.$this->gtitle_20.'";
			$gtitle_21="'.$this->gtitle_21.'";
			$gtitle_22="'.$this->gtitle_22.'";
			$gtitle_23="'.$this->gtitle_23.'";
			$gtitle_24="'.$this->gtitle_24.'";
			$gtitle_25="'.$this->gtitle_25.'";
			$gtitle_26="'.$this->gtitle_26.'";
			$gtitle_27="'.$this->gtitle_27.'";
			$gtitle_28="'.$this->gtitle_28.'";
			$gtitle_29="'.$this->gtitle_29.'";
			$gtitle_30="'.$this->gtitle_30.'";
			$gtitle_31="'.$this->gtitle_31.'";
			$gtitle_32="'.$this->gtitle_32.'";
			$gtitle_33="'.$this->gtitle_33.'";
			$gtitle_34="'.$this->gtitle_34.'";
			$gtitle_35="'.$this->gtitle_35.'";
			$gtitle_36="'.$this->gtitle_36.'";
			$gtitle_37="'.$this->gtitle_37.'";
			$gtitle_38="'.$this->gtitle_38.'";
			$gtitle_39="'.$this->gtitle_39.'";
			$gtitle_40="'.$this->gtitle_40.'";
			$gtitle_41="'.$this->gtitle_41.'";
			$footnav_home="'.$this->footnav_home.'";
			$footnav_privacy="'.$this->footnav_privacy.'";
			$footnav_dmca="'.$this->footnav_dmca.'";
			$footnav_contact="'.$this->footnav_contact.'";
			
			?>';

			file_put_contents('config.php', $data);


		}

	}

}


if(!empty($_POST['username'])&&!empty($_POST['password']))
{
	if($_POST['username']===$username&&$_POST['password']===$password){
		$_SESSION['username']=$username;

	}else{

		header('Location:index.php?error');
	}

}
if(isset($_GET['logout'])){
	unset($_SESSION['username']);
	header('Location:index.php');
	exit;
}

if(isset($_POST['update'])){

	if (is_writable('config.php')) {

			$object=new OverWrite;
			$object->Write($username,$password,$site_url,$site_title,$youtube_key,$youtube_key_2,$youtube_key_3,$youtube_key_4,$youtube_key_5,$youtube_key_6,$youtube_key_7,$youtube_key_8,$youtube_key_9,$youtube_key_10,$addthis_id,$contact_email,$site_theme,$home_chart_country,$home_chart_genreid,
		$nr_search_result,$use_ssl_images,$show_vid_embed,$show_down_but,$show_vid_descr,$show_rel_searches,$homepage_title,$homepage_desc,$search_seo_title,
		$videopage_title,$chart_pre_title,$chart_aft_title,$head_code,$home_ad_728,$chart_ad_728,$search_ad_728,$down_ad_728,$downmod_ad_300,$home_welcome_title,$home_searches_title,$home_chart_title,$home_chartbut_title,$searchresults_title,
		$search_noresults_title,$search_play_but,$search_stop_but,$search_down_but,$search_nav_prev,$search_nav_next,$vid_down_but,$vid_recen_title,$searchf_text,
		$all_gtitle,$gtitle_1,$gtitle_2,$gtitle_3,$gtitle_4,$gtitle_5,$gtitle_6,$gtitle_7,$gtitle_8,$gtitle_9,$gtitle_10,$gtitle_11,$gtitle_12,$gtitle_13,$gtitle_14,
		$gtitle_15,$gtitle_16,$gtitle_17,$gtitle_18,$gtitle_19,$gtitle_20,$gtitle_21,$gtitle_22,$gtitle_23,$gtitle_24,$gtitle_25,$gtitle_26,$gtitle_27,$gtitle_28,
		$gtitle_29,$gtitle_30,$gtitle_31,$gtitle_32,$gtitle_33,$gtitle_34,$gtitle_35,$gtitle_36,$gtitle_37,$gtitle_38,$gtitle_39,$gtitle_40,$gtitle_41,$footnav_home,$footnav_privacy,
		$footnav_dmca,$footnav_contact);
			header("Location:index.php?updated");

			} else {
				header('Location:index.php?file-error');
			}
}


?>