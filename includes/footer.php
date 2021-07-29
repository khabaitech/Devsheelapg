
        <footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                        <a href="#"><img src="../img/logo/devsheela_logo.png" style="height: 70px;" alt=""></a>
                                    </div>
                                    <p>
                                        Are you looking for executive accommodation in Bangalore? Then, devsheelapg is the best place where you can feel the real peace and serenity of being. We are always equipped with all facilities for our customers.
                                    </p>
                                    <div class="footer-icons">
                                        <ul>
                                            <li>
                                                <a href="" target="_blank">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                           </li>
                                      <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li> 
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Quick Links</h4>
                                    <ul class="footer-list">
                                        <li><a href="index.html">Home</a></li>
                                         <li><a href="about.html">About </a></li>
                                        <li><a href="facilities.html">Facilities</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="kitchen.html">Kitchen</a></li>
                                        <li><a href="contact-devsheela.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-3 hidden-sm col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Contact Us</h4>
                                    <ul class="footer-tags">
                                        <li><a href="tel:+91 9972462418">Tel: +91 9972462418</a></li>
                                       <!-- <li><a href="tel:+91 78992 48063">Mobile: +91 78992 48063</a></li>-->
                                        <li><a href="mailto:info@devsheelapg.in">E-mail: info@devsheelapg.in</a></li>
                                        <li><a href="#">Locate Us on Google Map</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Quick Contact</h4>
                                    <p>
                                       If you are looking for place in Bangalore please submit your contact number here. Our executive will get back to you with details.
                                    </p>

                                    <script>
function SubmitForm() {
var number = $("#number").val();
$.post("call_back.html", { number: number },
   function(data) {
     $(".suscribe-input").load("thankyoucallback.html");
     var form = document.getElementById("leadform");
form.reset();
   });
}
</script>

                                    <div class="subs-feilds" id="callback">
                                        <div class="suscribe-input">
                                           <form action="#" id="leadform" name="leadform"  method="post">
                                            <input type="text" class="email form-control width-80" style="width: 75%; float: left;" id="number" placeholder="Type Contact Number" name="number" required>
                                            <input type="button" id="searchForm" class="btn btn-primary md-close" onclick="SubmitForm();" value="GO" style="width: 20%;" />
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>
                                    Copyright © 2021<a href="devsheelapg.com">Devsheelapg</a> | Made with <i class="fa fa-heart"></i> by <a href="http://www.khabaitech.com/" target="_blank" >Khabai Tech</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>        
		