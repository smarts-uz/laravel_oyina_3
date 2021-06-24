@extends('layouts.app')

@section('content')
  <section>
    <div style="background: #EFFFF5;" id="filtercontainer">
      <div class="splide container mx-auto flex justify-between">
        <div class="splide__track" style="order: 1;">
          <ul class="splide__list">
            <li class="splide__slide "><a class="button active" onclick="filterSelection('all')">Barchasi</a></li>
            <li class="splide__slide"><a class="button" onclick="filterSelection('siyosat')">Siyosat</a></a></li>
            <li class="splide__slide"><a class="button" onclick="filterSelection('jamiyat')">Jamiyat</a></li>
            <li class="splide__slide"><a class="button" onclick="filterSelection('ilm')">Ilm-fan</a></li>
            <li class="splide__slide"><a class="button" onclick="filterSelection('madaniyat')">Madaniyat</a></li>
            <li class="splide__slide"><a class="button" onclick="filterSelection('manaviyat')">Ma’naviyat</a></li>
            <li class="splide__slide"><a class="button" onclick="filterSelection('yoshlar')">Yoshlar</a></li>
            <li class="splide__slide"><a class="button" onclick="filterSelection('meros')">Meros</a></li>
            <li class="splide__slide"><a class="button" onclick="filterSelection('vatandish')">Vatandosh</a></li>
            <li class="splide__slide"><a class="button" onclick="filterSelection('dunyo')">Dunyo</a></li>
            <li class="splide__slide"><a class="button" onclick="filterSelection('tabassum')">Tabassum</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="section-one-content container mx-auto flex">
      <div class="first-content ">
        <img src="../images/img1.png" alt="">
        <div class="bookmark flex justify-center items-center">
          <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
        </div>
               
        <p class="text-white"><span class="iconify text-white" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>

        <div class="text-content">
          <h1>Tadbirkorlarni qo‘llab-quvvatlash bo‘yicha qo‘shimcha
            mexanizmlar yaratiladi</h1>
            <div class="statics flex items-center">
              <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
              <span class="flex items-center"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> 4878</span>
              <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
            </div>
        </div>
      </div>
      <div class="second-content">
        <div class="second-content-head flex items-center justify-between">
          <h1 class="">So’nggi yangiliklar</h1>
          <a href="#">Barchasi</a>
        </div>
        <div class="line-gradient"></div>
        <div class="second-content-body flex">
          <div class="img-content">
            <img src="../images/img2.png" alt="">
          </div>
          <div class="text-content-second">
            <div class="icon-text flex items-center justify-between align-middle">
              <p class="bell flex items-center align-middle"><span class="iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>
              <div class="date-icons flex items-center">
                <span class="bell2 flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
                <span class="bell2 flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
              </div>
            </div>
            <a class="" href="#">“Yoshlar daftari” ga kirgan va
              dexqonchilik qilayotgan yoshlarga
              urug’lik va ko’chat xarid qilish uchun 2
              million so’mgacha subsidiya beriladi.</a>
          </div>
        </div>
        <div class="line-hr"></div>
        <div class="second-content-body flex">
          <div class="img-content">
            <img src="../images/img3.png" alt="">
          </div>
          <div class="text-content-second">
            <div class="icon-text flex items-center justify-between align-middle">
              <p class="bell flex items-center align-middle"><span class="iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>
              <div class="date-icons flex items-center">
                <span class="bell2 flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
                <span class="bell2 flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
              </div>
            </div>
            <a class="" href="#">Birinchi chorakda aholi daromadlari 
              9,8 foizga oshdi</a>
          </div>
        </div>
        <div class="line-hr"></div>
        <div class="second-content-body flex">
          <div class="img-content">
            <img src="../images/img4.png" alt="">
          </div>
          <div class="text-content-second">
            <div class="icon-text flex items-center justify-between align-middle">
              <p class="bell flex items-center align-middle"><span class="iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>
              <div class="date-icons flex items-center">
                <span class="bell2 flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
                <span class="bell2 flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
              </div>
            </div>
            <a class="" href="#">O’zbekiston va Aqsh o’rtasida oliy ta’lim
              sohasidagi hamkorlikning yangi
              dinamikasi</a>
          </div>
        </div>
        <div class="line-hr"></div>
        <div class="second-content-body flex">
          <div class="img-content">
            <img src="../images/img5.png" alt="">
          </div>
          <div class="text-content-second">
            <div class="icon-text flex items-center justify-between align-middle">
              <p class="bell flex items-center align-middle"><span class="iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>
              <div class="date-icons flex items-center">
                <span class="bell2 flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
                <span class="bell2 flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
              </div>
            </div>
            <a class="" href="#">“Hamma ayb yoshlarda emas. Tan olish
              kerak, tizim mukammal emas” - 15
              yoshda talaba bo‘lgan jizzaxlik yigit bilan
              suhbat</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="section-two container mx-auto flex">
    <div class="section-two-content-one">
      <div class="news-one">
        <div class="section-two-content-one-head flex items-center justify-between">
          <h1 class="">Dolzarb</h1>
          <a href="#">Barchasi</a>
        </div>
        <div class="line-gradient-two"></div>
        <div class="news-content flex">

          {{-- Dolzarb --}}
          <div class="news-content-main">
            <div class="news-img">
              <img src="../images/news1.jpg" alt="">
              <div class="bookmark2 flex justify-center items-center">
                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
              </div>
            </div>
            <div class="news-date">
              <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 11.04.2021</span>
            </div>
            <a href="#">Investitsiya va
              shaharsozlik loyihalari
              bilan tanishildi</a>
          </div>

          <div class="news-content-main ">
            <div class="news-img">
              <img src="../images/news2.png" alt="">
              <div class="bookmark2 flex justify-center items-center">
                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
              </div>
            </div>
            <div class="news-date">
              <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 11.04.2021</span>
            </div>
            <a href="#">O’zbekiston Prezidenti
              Pokiston Bosh vaziri
              bilan onlayn ...</a>
          </div>

          <div class="news-content-main ">
            <div class="news-img">
              <img src="../images/news3.png" alt="">
              <div class="bookmark2 flex justify-center items-center">
                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
              </div>
            </div>
            <div class="news-date">
              <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 11.04.2021</span>
            </div>
            <a href="#">AQSh va NATO 1
              may-dan Afg’onistondan
              qo’shinlarni olib ...</a>
          </div>

          <div class="news-content-main ">
            <div class="news-img">
              <img src="../images/news4.png" alt="">
              <div class="bookmark2 flex justify-center items-center">
                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
              </div>
            </div>
            <div class="news-date">
              <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 11.04.2021</span>
            </div>
            <a href="#">Tanzila Norboyeva
              Moskvada Rossiya
              davlat dumasi ...</a>
          </div>

        </div>

        {{-- Eshitmadim demanglar --}}
        <div class="section-two-content-two-head flex items-center justify-between">
          <h1 class="">Eshitmadim demanglar...</h1>
          <a href="#">Barchasi</a>
        </div>
        <div class="line-gradient-three"></div>
        <div class="news-content flex">

          <div class="news-content-main">
            <div class="news-img-two">
              <img src="../images/news5.png" alt="">
              <div class="bookmark2 flex justify-center items-center">
                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
              </div>
            </div>
            <div class="news-date flex items-center justify-between flex-wrap">
              <span class="flex items-center"><div class="dot-green"></div><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 11.04.2021</span>
              <span class="flex items-center"><div class="dot-red"></div><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 11.04.2021</span>
            </div>
            <a href="#">Investitsiya va
              shaharsozlik loyihalari
              bilan tanishildi</a>
          </div>

          <div class="news-content-main ">
            <div class="news-img-two">
              <img src="../images/news6.png" alt="">
              <div class="bookmark2 flex justify-center items-center">
                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
              </div>
            </div>
            <div class="news-date flex items-center justify-between flex-wrap">
              <span class="flex items-center"><div class="dot-green"></div><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 11.04.2021</span>
              <span class="flex items-center"><div class="dot-red"></div><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 11.04.2021</span>
            </div>
            <a href="#">“El-yurt umidi”
              jamg’armasi xorijiy
              davlatlarda o’qish ...</a>
          </div>
           
          <div class="news-content-main ">
            <div class="news-img-two">
              <img src="../images/news7.png" alt="">
              <div class="bookmark2 flex justify-center items-center">
                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
              </div>
            </div>
            <div class="news-date flex items-center justify-between flex-wrap">
              <span class="flex items-center"><div class="dot-green"></div><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 11.04.2021</span>
              <span class="flex items-center"><div class="dot-red"></div><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 11.04.2021</span>
            </div>
            <a href="#">“Toshkent Besh
              tashabbus harakati”ga
              ro’yxatga olish ...</a>
          </div>

          <div class="news-content-main ">
            <div class="news-img-two">
              <img src="../images/news8.png" alt="">
              <div class="bookmark2 flex justify-center items-center">
                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
              </div>
            </div>
            <div class="news-date flex items-center justify-between flex-wrap">
              <span class="flex items-center"><div class="dot-green"></div><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 11.04.2021</span>
              <span class="flex items-center"><div class="dot-red"></div><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 11.04.2021</span>
            </div>
            <a href="#">Ilmiy faoliyat bilan
              shug’ullanuvchilar
              uchun grant tanlovlari ..</a>
          </div>

        </div>
      </div>
    </div>
    <div class="section-two-content-two">
      <div class="section-two-content-two-main">
        <div class="top-icons flex items-center justify-between">
          <p class="rep flex items-center align-middle"><span class="iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Boqiy Hikmat</p>
         <a href="#"><svg width="22" height="22" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M24.4302 0.91211H22.1152C22.0359 0.912021 21.9574 0.927977 21.8844 0.959011C21.8114 0.990046 21.7455 1.03551 21.6908 1.09265C21.636 1.14979 21.5934 1.21742 21.5657 1.29142C21.5379 1.36543 21.5255 1.44428 21.5293 1.52319L21.7246 5.54648C20.589 4.21421 19.1755 3.14426 17.5825 2.41108C15.9894 1.6779 14.255 1.2991 12.5 1.30102C5.82715 1.30102 0.385745 6.72294 0.390628 13.3665C0.395511 20.0208 5.81543 25.4135 12.5 25.4135C15.4986 25.4178 18.3913 24.3102 20.6143 22.3066C20.6736 22.2537 20.7216 22.1893 20.7551 22.1173C20.7886 22.0453 20.807 21.9673 20.8092 21.888C20.8114 21.8087 20.7973 21.7297 20.7678 21.656C20.7384 21.5823 20.6941 21.5154 20.6377 21.4593L18.9775 19.8064C18.8725 19.7018 18.7314 19.6409 18.5829 19.6359C18.4345 19.631 18.2896 19.6823 18.1777 19.7797C16.866 20.9287 15.2335 21.6524 13.4981 21.8542C11.7627 22.056 10.0067 21.7264 8.46426 20.9092C6.92182 20.0921 5.66619 18.8262 4.86477 17.2805C4.06334 15.7347 3.7542 13.9824 3.97855 12.2573C4.20291 10.5321 4.95009 8.91603 6.12051 7.62445C7.29093 6.33287 8.82896 5.42716 10.5296 5.02807C12.2302 4.62898 14.0126 4.75547 15.6392 5.39067C17.2657 6.02587 18.6592 7.1396 19.6338 8.58339L14.6763 8.34664C14.597 8.34289 14.5178 8.35521 14.4435 8.38284C14.3692 8.41047 14.3012 8.45285 14.2438 8.50739C14.1864 8.56194 14.1408 8.62753 14.1096 8.70018C14.0784 8.77282 14.0624 8.85101 14.0625 8.93001V11.2348C14.0625 11.3895 14.1242 11.5379 14.2341 11.6473C14.344 11.7567 14.493 11.8182 14.6484 11.8182H24.4302C24.5856 11.8182 24.7346 11.7567 24.8445 11.6473C24.9544 11.5379 25.0161 11.3895 25.0161 11.2348V1.49548C25.0161 1.34076 24.9544 1.19238 24.8445 1.08297C24.7346 0.973572 24.5856 0.91211 24.4302 0.91211Z" fill="white"/>
          </svg>
          </a>
        </div>
        <div class="section-two-content-two-main-content flex flex-col items-center justify-between">
          <div class="main-img">
            <img src="../images/Ellipse1.png" alt="">
          </div>
          <div class="main-text flex justify-center items-center flex-col">
            <h1>Abu Ali Ibn Sino</h1>
            <p>(Yashab o’tgan yillari: 980-1037)</p>
            <h2>Vahimaning o’zi yarim kasallikdir. </h2>
             <h2> Xotirjamlik yarim sog’liqdir.</h2>
              <h2>Sabr esa shifoni
              boshlanishidir.</h2>
          </div>
        </div>

        

      </div>
    </div>
  </section>

@endsection