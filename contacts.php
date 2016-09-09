<?php require_once "includes/header.php" ?>
                        
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-sm-12 contactSection">
            <h3 class="capitalLetter center">Офис</h3>
            <ul class="contactOffise">
                <li>
                    <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i> 
                    <span><a href="mailto:nikolay.chernov@ua.fm">nikolay.chernov@ua.fm</a></span>
                </li>
                <li>
                    <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i> 
                    <span><a href="mailto:tsp-dnepr@mail.ru">tsp-dnepr@mail.ru</a></span>
                </li>
                <li>
                    <i class="fa fa-skype fa-lg" aria-hidden="true"></i>
                    <span><a href="skype:ref-servis?chat">ref-servis</a></span>
                </li>
                <li>
                    <i class="fa fa-phone fa-lg" aria-hidden="true"></i>
                    <span>(056) 794-56-26</span>
                </li>
                <li>
                    <i class="fa fa-mobile fa-2x" aria-hidden="true"></i>
                    <span>(095) 454-30-45</span>
                </li>
                <li>
                    <i class="fa fa-mobile fa-2x" aria-hidden="true"></i>
                    <span>(067) 563-46-63</span>
                </li>
                <li>
                    <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                    <span>г. Днепропетровск, ул. Фурманова, 15, офис 216</span>
                </li>
            </ul>
            <canvas width="450" height="400" id="mapOffice"></canvas>
        </div>
    </div>
        <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-sm-12 contactSection">
            <h3 class="capitalLetter center">Сервисная станция</h3>
            <ul class="contactOffise">
                <li>
                    <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i> 
                    <span><a href="mailto:nikolay.chernov@ua.fm">nikolay.chernov@ua.fm</a></span>
                </li>
                <li>
                    <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i> 
                    <span><a href="mailto:tsp-dnepr@mail.ru">tsp-dnepr@mail.ru</a></span>
                </li>
                <li>
                    <i class="fa fa-skype fa-lg" aria-hidden="true"></i>
                    <span><a href="skype:ref-servis?chat">ref-servis</a></span>
                </li>
                <li>
                    <i class="fa fa-phone fa-lg" aria-hidden="true"></i>
                    <span>(056) 794-56-26</span>
                </li>
                <li>
                    <i class="fa fa-mobile fa-2x" aria-hidden="true"></i>
                    <span>(095) 454-30-45</span>
                </li>
                <li>
                    <i class="fa fa-mobile fa-2x" aria-hidden="true"></i>
                    <span>(067) 563-46-63</span>
                </li>
                <li>
                    <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                    <span>г. Днепропетровск, ул. Береговая, 210-а</span>
                </li>
            </ul>
            <canvas width="450" height="400" id="mapOffice"></canvas>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-sm-12">
        <p class="formHeading">Если у Вас возникли какие-то вопросы, Вы можете воспользоваться формой, и наш менеджер 
        обязательно свяжеться с Вами.</p>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-sm-12">
            <form id="feedback" action="#" method="post">
                <div class="form-group">
                    <label for="InputName">Имя*</label>
                    <input type="text" class="form-control" id="InputName" placeholder="Введите Ваше имя">
                  </div>
                  <div class="form-group">
                    <label for="InputName">Телефон*</label>
                    <input type="text" class="form-control" id="InputName" placeholder="Введите Ваш телефон">
                  </div>
                  <div class="form-group">
                    <label for="InputEmail">Email</label>
                    <input type="email" class="form-control" id="InputEmail" placeholder="Введите Вашу почту">
                  </div>
                  <div class="form-group">
                      <textarea class="form-control" rows="3" placeholder="Ваше сообщение"></textarea>
                  </div>
                  <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                  <input type="submit" class="btn btn-default cont-submit" value="Отправить">
            </form>
            </div>
            </div>
        </div>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php require_once "includes/footer.php" ?>