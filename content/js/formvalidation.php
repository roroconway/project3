<script type="text/javascript">
   <!--
      function validateEmail()
      {
         var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter valid email")
            document.myForm.email.focus() ;
            return false;
         }
         return( true );
      }
   //-->
</script>