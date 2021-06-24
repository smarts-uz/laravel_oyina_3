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
      <div class="first-content">
        <img src="../images/img1.png" alt="">
        <div class="bookmark flex justify-center items-center">
          <span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> 
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

      </div>
    </div>
  </section>

@endsection