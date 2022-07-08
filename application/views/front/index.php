<!-- ====== Hero Section Start -->
<div id="home" class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]">
  <div class="container">
    <div class="-mx-4 flex flex-wrap items-center">
      <div class="w-full px-4">
        <div class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center" data-wow-delay=".2s">

          <h1 class="mb-8 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug md:text-[45px] md:leading-snug">
            WEB EO | 2SI08
          </h1>
          <p class="mx-auto mb-10 max-w-[600px] text-base text-[#e4e4e4] sm:text-lg sm:leading-relaxed md:text-xl md:leading-relaxed">
            Sukseskan acaramu dengan kami, dengan konsep dan eksekusi terbaik untuk
            berbagai macam acara offline & online, Seminar/ Webinar, Offline & Virtual
            Exhibition, Video Production, Launching, Wedding, Birthday party dan yang lainnya!
          </p>
          <ul class="mb-10 flex flex-wrap items-center justify-center">
            <li>
              <a href="https://github.com/nnomeng0la/Pyoyek2" target="_blank" class="flex items-center py-4 px-6 text-base font-medium text-white transition duration-300 ease-in-out hover:opacity-70 sm:px-10">
                Star on Github
                <span class="pl-2">
                  <svg width="20" height="8" viewBox="0 0 20 8" class="fill-current">
                    <path d="M19.2188 2.90632L17.0625 0.343819C16.875 0.125069 16.5312 0.0938193 16.2812 0.281319C16.0625 0.468819 16.0312 0.812569 16.2188 1.06257L18.25 3.46882H0.9375C0.625 3.46882 0.375 3.71882 0.375 4.03132C0.375 4.34382 0.625 4.59382 0.9375 4.59382H18.25L16.2188 7.00007C16.0312 7.21882 16.0625 7.56257 16.2812 7.78132C16.375 7.87507 16.5 7.90632 16.625 7.90632C16.7812 7.90632 16.9375 7.84382 17.0312 7.71882L19.1875 5.15632C19.75 4.46882 19.75 3.53132 19.2188 2.90632Z" />
                  </svg>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- ====== Hero Section End -->

<!-- ====== Features Section Start -->
<section class="pt-20 pb-8 lg:pt-[120px] lg:pb-[70px]">
  <div class="container">
    <div class="-mx-4 flex flex-wrap">
      <div class="w-full px-4">
        <div class="mb-12 max-w-[620px] lg:mb-20">
          <span class="mb-2 block text-lg font-semibold text-primary">
            Hello There!
          </span>
          <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[42px]">

            These are our special services for you
          </h2>
        </div>
      </div>
    </div>
    <div class="-mx-2 flex flex-wrap">
      <?php
      $nomor = 1;
      foreach ($list_jenis_kegiatan as $jenis_kegiatan) {
      ?>

        <div class="w-full px-2 md:w-1/2 lg:w-1/3">
          <div class="wow fadeInUp group mb-12 bg-white" data-wow-delay=".1s">

            <h4 class="mb-3 text-xl font-bold text-dark">
              <?= $nomor ?>.

              <?= $jenis_kegiatan->nama ?> ID Jenis: <?= $jenis_kegiatan->id ?>
            </h4>
          </div>
        </div>
      <?php
        $nomor++;
      }

      ?>


    </div>
  </div>
</section>
<!-- ====== Features Section End -->

<!-- ====== About Section Start -->
<section id="about" class="bg-[#f3f4fe] pt-20 pb-20 lg:pt-[120px] lg:pb-[120px]">
  <div class="container">
    <div class="wow fadeInUp bg-white" data-wow-delay=".2s">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">
          <div class="items-center justify-between overflow-hidden border lg:flex">
            <div class="w-full py-12 px-7 sm:px-12 md:p-16 lg:max-w-[565px] lg:py-9 lg:px-16 xl:max-w-[640px] xl:p-[70px]">
              <span class="mb-5 inline-block bg-primary py-2 px-5 text-sm font-medium text-white">
                About Us
              </span>
              <h2 class="mb-6 text-3xl font-bold text-dark sm:text-4xl sm:leading-snug 2xl:text-[40px]">
                We're
                Executing ideas since 2022
              </h2>
              <p class="mb-9 text-base leading-relaxed text-body-color">
                Perkenalkan Kami dari kelompok WEB Event Organizer kelas 2SI08
                Sekolah Tinggi Teknologi Terpadu Nurul Fikri.
              </p>
              <p class="mb-9 text-base leading-relaxed text-body-color">
                Web ini dibuat untuk memenuhi Tugas Proyek 2 Pemrograman WEB Lanjutan Program Studi Sistem Inforrmasi
                Sekolah Tinggi Teknologi Terpadu Nurul Fikri.
              </p>
            </div>
            <div class="text-center">
              <div class="relative z-10 inline-block">
                <img src="<?php echo base_url('assets/images/about/about-image.png') ?>" alt="image" class="mx-auto lg:ml-auto" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== About Section End -->

<!-- ====== Event Section Start -->
<section id="event" class="relative z-20 overflow-hidden bg-white pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
  <div class="container">
    <div class="-mx-4 flex flex-wrap">
      <div class="w-full px-4">
        <div class="mx-auto mb-[60px] max-w-[620px] text-center lg:mb-20">
          <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]">
            Event
          </h2>
          <p class="text-lg leading-relaxed text-body-color sm:text-xl sm:leading-relaxed">
            Silakan pilih event yang ingin diikuti. </p>
        </div>
      </div>
    </div>

    <div class="flex flex-wrap items-center justify-center">
      <?php
      // $nomor = 1;
      foreach ($list_kegiatan as $kegiatan) {
      ?>
        <div class="w-full md:w-1 lg:w-1 p-4">
          <div class="wow fadeInUp relative z-10 mb-10 overflow-hidden rounded-xl border border-primary border-opacity-20 bg-white py-10 px-8 text-center shadow-Event sm:p-12 lg:py-10 lg:px-6 xl:p-12" data-wow-delay=".15s
              ">
            <div class="w-full">
              <img src="<?php echo base_url('foto/' . $kegiatan->foto_flyer) ?>" alt="<?= $kegiatan->foto_flyer ?>">
            </div>
            <span class="mb-2 block text-base font-medium uppercase text-dark">
              <?= $kegiatan->judul ?>
            </span>
            <h2 class="mb-9 text-[28px] font-semibold text-primary">
              Rp.<?= $kegiatan->harga_tiket ?>/Orang
            </h2>

            <div class="mb-10">
              <p class="mb-1 text-base font-medium leading-loose text-body-color">
                Kapasitas <?= $kegiatan->kapasitas ?> Orang
              </p>
              <p class="mb-1 text-base font-medium leading-loose text-body-color">
                Narasumber: <b><?= $kegiatan->narasumber ?> </b>
              </p>
              <p class="mb-1 text-base font-medium leading-loose text-body-color">
                Tanggal: <?= $kegiatan->tanggal ?>
              </p>
              <p class="mb-1 text-base font-medium leading-loose text-body-color">
                Tempat: <?= $kegiatan->tempat ?>
              </p>
              <p class="mb-1 text-base font-medium leading-loose text-body-color">
                Pic: <?= $kegiatan->pic ?>
              </p>
              <p class="mb-1 text-base font-medium leading-loose text-body-color">
                Jenis Kegiatan ID: <?= $kegiatan->jenis_id ?>
              </p>
            </div>
            <div class="w-full">
              <a href="<?php echo base_url('index.php/front/registrasi') ?>" class="inline-block rounded-full border border-[#D4DEFF] bg-transparent py-4 px-11 text-center text-base font-medium text-primary transition duration-300 ease-in-out hover:border-primary hover:bg-primary hover:text-white">
                Order now
              </a>
            </div>
            <span class="absolute left-0 bottom-0 z-[-1] block h-14 w-14 rounded-tr-full bg-primary">
            </span>
          </div>
        </div>
      <?php
        // $nomor++;
      }

      ?>

    </div>
  </div>
</section>
<!-- ====== Event Section End -->

<!-- ====== Team Section Start -->
<section id="team" class="pt-20 pb-10 lg:pt-[120px] lg:pb-20">
  <div class="container">
    <div class="-mx-4 flex flex-wrap">
      <div class="w-full px-4">
        <div class="mx-auto mb-[60px] max-w-[620px] text-center">
          <span class="mb-2 block text-lg font-semibold text-primary">
            Our Team
          </span>
          <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[42px]">
            Program Studi Sistem Informasi
          </h2>
          <p class="text-lg leading-relaxed text-body-color sm:text-xl sm:leading-relaxed">
            <b>Sekolah Tinggi Teknologi Terpadu Nurul Fikri</b>
          </p>
        </div>
      </div>
    </div>

    <div class="-mx-3 flex flex-wrap justify-center">
      <!-- Faiha -->
      <div class="w-full px-1 sm:w-1 lg:w-1">
        <div class="wow fadeInUp mb-10" data-wow-delay=".1s">
          <div class="h-170px] relative z-10 mx-auto mb-6 w-[170px] rounded-full">
            <img src="<?php echo base_url('assets/images/team/team1.jpeg') ?>" alt="image" class="w-full rounded-full" />
            <span class="absolute top-0 left-0 z-[-1]">
              <svg width="71" height="82" viewBox="0 0 71 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.29337" cy="80.7066" r="1.29337" transform="rotate(-90 1.29337 80.7066)" fill="#3056D3" />
                <circle cx="12.6747" cy="80.7066" r="1.29337" transform="rotate(-90 12.6747 80.7066)" fill="#3056D3" />
                <circle cx="24.0575" cy="80.7066" r="1.29337" transform="rotate(-90 24.0575 80.7066)" fill="#3056D3" />
                <circle cx="35.4379" cy="80.7066" r="1.29337" transform="rotate(-90 35.4379 80.7066)" fill="#3056D3" />
                <circle cx="46.8197" cy="80.7066" r="1.29337" transform="rotate(-90 46.8197 80.7066)" fill="#3056D3" />
                <circle cx="68.807" cy="80.7066" r="1.29337" transform="rotate(-90 68.807 80.7066)" fill="#3056D3" />
                <circle cx="57.9443" cy="80.7066" r="1.29337" transform="rotate(-90 57.9443 80.7066)" fill="#3056D3" />
                <circle cx="1.29337" cy="69.3249" r="1.29337" transform="rotate(-90 1.29337 69.3249)" fill="#3056D3" />
                <circle cx="12.6747" cy="69.3249" r="1.29337" transform="rotate(-90 12.6747 69.3249)" fill="#3056D3" />
                <circle cx="24.0575" cy="69.3249" r="1.29337" transform="rotate(-90 24.0575 69.3249)" fill="#3056D3" />
                <circle cx="35.4379" cy="69.3249" r="1.29337" transform="rotate(-90 35.4379 69.3249)" fill="#3056D3" />
                <circle cx="46.8197" cy="69.325" r="1.29337" transform="rotate(-90 46.8197 69.325)" fill="#3056D3" />
                <circle cx="68.807" cy="69.325" r="1.29337" transform="rotate(-90 68.807 69.325)" fill="#3056D3" />
                <circle cx="57.9433" cy="69.325" r="1.29337" transform="rotate(-90 57.9433 69.325)" fill="#3056D3" />
                <circle cx="1.29337" cy="57.9433" r="1.29337" transform="rotate(-90 1.29337 57.9433)" fill="#3056D3" />
                <circle cx="1.29337" cy="24.0568" r="1.29337" transform="rotate(-90 1.29337 24.0568)" fill="#3056D3" />
                <circle cx="12.6747" cy="57.9433" r="1.29337" transform="rotate(-90 12.6747 57.9433)" fill="#3056D3" />
                <circle cx="12.6747" cy="24.0568" r="1.29337" transform="rotate(-90 12.6747 24.0568)" fill="#3056D3" />
                <circle cx="24.0575" cy="57.9433" r="1.29337" transform="rotate(-90 24.0575 57.9433)" fill="#3056D3" />
                <circle cx="24.0575" cy="24.0568" r="1.29337" transform="rotate(-90 24.0575 24.0568)" fill="#3056D3" />
                <circle cx="35.4379" cy="57.9433" r="1.29337" transform="rotate(-90 35.4379 57.9433)" fill="#3056D3" />
                <circle cx="35.4379" cy="24.0568" r="1.29337" transform="rotate(-90 35.4379 24.0568)" fill="#3056D3" />
                <circle cx="46.8197" cy="57.9431" r="1.29337" transform="rotate(-90 46.8197 57.9431)" fill="#3056D3" />
                <circle cx="46.8197" cy="24.0567" r="1.29337" transform="rotate(-90 46.8197 24.0567)" fill="#3056D3" />
                <circle cx="68.807" cy="57.9431" r="1.29337" transform="rotate(-90 68.807 57.9431)" fill="#3056D3" />
                <circle cx="68.807" cy="24.0567" r="1.29337" transform="rotate(-90 68.807 24.0567)" fill="#3056D3" />
                <circle cx="57.9433" cy="57.9431" r="1.29337" transform="rotate(-90 57.9433 57.9431)" fill="#3056D3" />
                <circle cx="57.9443" cy="24.0567" r="1.29337" transform="rotate(-90 57.9443 24.0567)" fill="#3056D3" />
                <circle cx="1.29337" cy="46.5615" r="1.29337" transform="rotate(-90 1.29337 46.5615)" fill="#3056D3" />
                <circle cx="1.29337" cy="12.6751" r="1.29337" transform="rotate(-90 1.29337 12.6751)" fill="#3056D3" />
                <circle cx="12.6747" cy="46.5615" r="1.29337" transform="rotate(-90 12.6747 46.5615)" fill="#3056D3" />
                <circle cx="12.6747" cy="12.6751" r="1.29337" transform="rotate(-90 12.6747 12.6751)" fill="#3056D3" />
                <circle cx="24.0575" cy="46.5615" r="1.29337" transform="rotate(-90 24.0575 46.5615)" fill="#3056D3" />
                <circle cx="24.0575" cy="12.6751" r="1.29337" transform="rotate(-90 24.0575 12.6751)" fill="#3056D3" />
                <circle cx="35.4379" cy="46.5615" r="1.29337" transform="rotate(-90 35.4379 46.5615)" fill="#3056D3" />
                <circle cx="35.4379" cy="12.6751" r="1.29337" transform="rotate(-90 35.4379 12.6751)" fill="#3056D3" />
                <circle cx="46.8197" cy="46.5615" r="1.29337" transform="rotate(-90 46.8197 46.5615)" fill="#3056D3" />
                <circle cx="46.8197" cy="12.6751" r="1.29337" transform="rotate(-90 46.8197 12.6751)" fill="#3056D3" />
                <circle cx="68.807" cy="46.5615" r="1.29337" transform="rotate(-90 68.807 46.5615)" fill="#3056D3" />
                <circle cx="68.807" cy="12.6751" r="1.29337" transform="rotate(-90 68.807 12.6751)" fill="#3056D3" />
                <circle cx="57.9433" cy="46.5615" r="1.29337" transform="rotate(-90 57.9433 46.5615)" fill="#3056D3" />
                <circle cx="57.9443" cy="12.6751" r="1.29337" transform="rotate(-90 57.9443 12.6751)" fill="#3056D3" />
                <circle cx="1.29337" cy="35.1798" r="1.29337" transform="rotate(-90 1.29337 35.1798)" fill="#3056D3" />
                <circle cx="1.29337" cy="1.2933" r="1.29337" transform="rotate(-90 1.29337 1.2933)" fill="#3056D3" />
                <circle cx="12.6747" cy="35.1798" r="1.29337" transform="rotate(-90 12.6747 35.1798)" fill="#3056D3" />
                <circle cx="12.6747" cy="1.2933" r="1.29337" transform="rotate(-90 12.6747 1.2933)" fill="#3056D3" />
                <circle cx="24.0575" cy="35.1798" r="1.29337" transform="rotate(-90 24.0575 35.1798)" fill="#3056D3" />
                <circle cx="24.0575" cy="1.29336" r="1.29337" transform="rotate(-90 24.0575 1.29336)" fill="#3056D3" />
                <circle cx="35.4379" cy="35.1798" r="1.29337" transform="rotate(-90 35.4379 35.1798)" fill="#3056D3" />
                <circle cx="35.4379" cy="1.29336" r="1.29337" transform="rotate(-90 35.4379 1.29336)" fill="#3056D3" />
                <circle cx="46.8197" cy="35.18" r="1.29337" transform="rotate(-90 46.8197 35.18)" fill="#3056D3" />
                <circle cx="46.8197" cy="1.29354" r="1.29337" transform="rotate(-90 46.8197 1.29354)" fill="#3056D3" />
                <circle cx="68.807" cy="35.18" r="1.29337" transform="rotate(-90 68.807 35.18)" fill="#3056D3" />
                <circle cx="68.807" cy="1.29354" r="1.29337" transform="rotate(-90 68.807 1.29354)" fill="#3056D3" />
                <circle cx="57.9443" cy="35.18" r="1.29337" transform="rotate(-90 57.9443 35.18)" fill="#3056D3" />
                <circle cx="57.9443" cy="1.29354" r="1.29337" transform="rotate(-90 57.9443 1.29354)" fill="#3056D3" />
              </svg>
            </span>
            <span class="absolute right-0 bottom-0">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z" stroke="#13C296" />
              </svg>
            </span>
          </div>
          <div class="text-center">
            <h4 class="mb-2 text-lg font-medium text-dark">
              Fathiyah Faiha Adwa </h4>
            <p class="mb-5 text-sm font-medium text-body-color">
              0110121179 </p>
            <div class="flex items-center justify-center">

            </div>
          </div>
        </div>
      </div>
      <!-- Fatah -->
      <div class="w-full px-1 sm:w-1 lg:w-1">
        <div class="wow fadeInUp mb-10" data-wow-delay=".25s">
          <div class="h-170px] relative z-10 mx-auto mb-6 w-[170px] rounded-full">
            <img src="<?php echo base_url('assets/images/team/team4.jpeg') ?>" alt="image" class="w-full rounded-full" />
            <span class="absolute top-0 left-0 z-[-1]">
              <svg width="71" height="82" viewBox="0 0 71 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.29337" cy="80.7066" r="1.29337" transform="rotate(-90 1.29337 80.7066)" fill="#3056D3" />
                <circle cx="12.6747" cy="80.7066" r="1.29337" transform="rotate(-90 12.6747 80.7066)" fill="#3056D3" />
                <circle cx="24.0575" cy="80.7066" r="1.29337" transform="rotate(-90 24.0575 80.7066)" fill="#3056D3" />
                <circle cx="35.4379" cy="80.7066" r="1.29337" transform="rotate(-90 35.4379 80.7066)" fill="#3056D3" />
                <circle cx="46.8197" cy="80.7066" r="1.29337" transform="rotate(-90 46.8197 80.7066)" fill="#3056D3" />
                <circle cx="68.807" cy="80.7066" r="1.29337" transform="rotate(-90 68.807 80.7066)" fill="#3056D3" />
                <circle cx="57.9443" cy="80.7066" r="1.29337" transform="rotate(-90 57.9443 80.7066)" fill="#3056D3" />
                <circle cx="1.29337" cy="69.3249" r="1.29337" transform="rotate(-90 1.29337 69.3249)" fill="#3056D3" />
                <circle cx="12.6747" cy="69.3249" r="1.29337" transform="rotate(-90 12.6747 69.3249)" fill="#3056D3" />
                <circle cx="24.0575" cy="69.3249" r="1.29337" transform="rotate(-90 24.0575 69.3249)" fill="#3056D3" />
                <circle cx="35.4379" cy="69.3249" r="1.29337" transform="rotate(-90 35.4379 69.3249)" fill="#3056D3" />
                <circle cx="46.8197" cy="69.325" r="1.29337" transform="rotate(-90 46.8197 69.325)" fill="#3056D3" />
                <circle cx="68.807" cy="69.325" r="1.29337" transform="rotate(-90 68.807 69.325)" fill="#3056D3" />
                <circle cx="57.9433" cy="69.325" r="1.29337" transform="rotate(-90 57.9433 69.325)" fill="#3056D3" />
                <circle cx="1.29337" cy="57.9433" r="1.29337" transform="rotate(-90 1.29337 57.9433)" fill="#3056D3" />
                <circle cx="1.29337" cy="24.0568" r="1.29337" transform="rotate(-90 1.29337 24.0568)" fill="#3056D3" />
                <circle cx="12.6747" cy="57.9433" r="1.29337" transform="rotate(-90 12.6747 57.9433)" fill="#3056D3" />
                <circle cx="12.6747" cy="24.0568" r="1.29337" transform="rotate(-90 12.6747 24.0568)" fill="#3056D3" />
                <circle cx="24.0575" cy="57.9433" r="1.29337" transform="rotate(-90 24.0575 57.9433)" fill="#3056D3" />
                <circle cx="24.0575" cy="24.0568" r="1.29337" transform="rotate(-90 24.0575 24.0568)" fill="#3056D3" />
                <circle cx="35.4379" cy="57.9433" r="1.29337" transform="rotate(-90 35.4379 57.9433)" fill="#3056D3" />
                <circle cx="35.4379" cy="24.0568" r="1.29337" transform="rotate(-90 35.4379 24.0568)" fill="#3056D3" />
                <circle cx="46.8197" cy="57.9431" r="1.29337" transform="rotate(-90 46.8197 57.9431)" fill="#3056D3" />
                <circle cx="46.8197" cy="24.0567" r="1.29337" transform="rotate(-90 46.8197 24.0567)" fill="#3056D3" />
                <circle cx="68.807" cy="57.9431" r="1.29337" transform="rotate(-90 68.807 57.9431)" fill="#3056D3" />
                <circle cx="68.807" cy="24.0567" r="1.29337" transform="rotate(-90 68.807 24.0567)" fill="#3056D3" />
                <circle cx="57.9433" cy="57.9431" r="1.29337" transform="rotate(-90 57.9433 57.9431)" fill="#3056D3" />
                <circle cx="57.9443" cy="24.0567" r="1.29337" transform="rotate(-90 57.9443 24.0567)" fill="#3056D3" />
                <circle cx="1.29337" cy="46.5615" r="1.29337" transform="rotate(-90 1.29337 46.5615)" fill="#3056D3" />
                <circle cx="1.29337" cy="12.6751" r="1.29337" transform="rotate(-90 1.29337 12.6751)" fill="#3056D3" />
                <circle cx="12.6747" cy="46.5615" r="1.29337" transform="rotate(-90 12.6747 46.5615)" fill="#3056D3" />
                <circle cx="12.6747" cy="12.6751" r="1.29337" transform="rotate(-90 12.6747 12.6751)" fill="#3056D3" />
                <circle cx="24.0575" cy="46.5615" r="1.29337" transform="rotate(-90 24.0575 46.5615)" fill="#3056D3" />
                <circle cx="24.0575" cy="12.6751" r="1.29337" transform="rotate(-90 24.0575 12.6751)" fill="#3056D3" />
                <circle cx="35.4379" cy="46.5615" r="1.29337" transform="rotate(-90 35.4379 46.5615)" fill="#3056D3" />
                <circle cx="35.4379" cy="12.6751" r="1.29337" transform="rotate(-90 35.4379 12.6751)" fill="#3056D3" />
                <circle cx="46.8197" cy="46.5615" r="1.29337" transform="rotate(-90 46.8197 46.5615)" fill="#3056D3" />
                <circle cx="46.8197" cy="12.6751" r="1.29337" transform="rotate(-90 46.8197 12.6751)" fill="#3056D3" />
                <circle cx="68.807" cy="46.5615" r="1.29337" transform="rotate(-90 68.807 46.5615)" fill="#3056D3" />
                <circle cx="68.807" cy="12.6751" r="1.29337" transform="rotate(-90 68.807 12.6751)" fill="#3056D3" />
                <circle cx="57.9433" cy="46.5615" r="1.29337" transform="rotate(-90 57.9433 46.5615)" fill="#3056D3" />
                <circle cx="57.9443" cy="12.6751" r="1.29337" transform="rotate(-90 57.9443 12.6751)" fill="#3056D3" />
                <circle cx="1.29337" cy="35.1798" r="1.29337" transform="rotate(-90 1.29337 35.1798)" fill="#3056D3" />
                <circle cx="1.29337" cy="1.2933" r="1.29337" transform="rotate(-90 1.29337 1.2933)" fill="#3056D3" />
                <circle cx="12.6747" cy="35.1798" r="1.29337" transform="rotate(-90 12.6747 35.1798)" fill="#3056D3" />
                <circle cx="12.6747" cy="1.2933" r="1.29337" transform="rotate(-90 12.6747 1.2933)" fill="#3056D3" />
                <circle cx="24.0575" cy="35.1798" r="1.29337" transform="rotate(-90 24.0575 35.1798)" fill="#3056D3" />
                <circle cx="24.0575" cy="1.29336" r="1.29337" transform="rotate(-90 24.0575 1.29336)" fill="#3056D3" />
                <circle cx="35.4379" cy="35.1798" r="1.29337" transform="rotate(-90 35.4379 35.1798)" fill="#3056D3" />
                <circle cx="35.4379" cy="1.29336" r="1.29337" transform="rotate(-90 35.4379 1.29336)" fill="#3056D3" />
                <circle cx="46.8197" cy="35.18" r="1.29337" transform="rotate(-90 46.8197 35.18)" fill="#3056D3" />
                <circle cx="46.8197" cy="1.29354" r="1.29337" transform="rotate(-90 46.8197 1.29354)" fill="#3056D3" />
                <circle cx="68.807" cy="35.18" r="1.29337" transform="rotate(-90 68.807 35.18)" fill="#3056D3" />
                <circle cx="68.807" cy="1.29354" r="1.29337" transform="rotate(-90 68.807 1.29354)" fill="#3056D3" />
                <circle cx="57.9443" cy="35.18" r="1.29337" transform="rotate(-90 57.9443 35.18)" fill="#3056D3" />
                <circle cx="57.9443" cy="1.29354" r="1.29337" transform="rotate(-90 57.9443 1.29354)" fill="#3056D3" />
              </svg>
            </span>
            <span class="absolute right-0 bottom-0">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z" stroke="#13C296" />
              </svg>
            </span>
          </div>
          <div class="text-center">
            <h4 class="mb-2 text-lg font-medium text-dark">
              Fatah Muhammad Fikrudin
            </h4>
            <p class="mb-5 text-sm font-medium text-body-color">
              0110121162
            </p>
            <div class="flex items-center justify-center">

            </div>
          </div>
        </div>
      </div>
      <!-- Lestari -->
      <div class="w-full px-1 sm:w-1 lg:w-1">
        <div class="wow fadeInUp mb-10" data-wow-delay=".15s">
          <div class="h-170px] relative z-10 mx-auto mb-6 w-[170px] rounded-full">
            <img src="<?php echo base_url('assets/images/team/team2.jpeg') ?>" alt="image" class="w-full rounded-full" />
            <span class="absolute top-0 left-0 z-[-1]">
              <svg width="71" height="82" viewBox="0 0 71 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.29337" cy="80.7066" r="1.29337" transform="rotate(-90 1.29337 80.7066)" fill="#3056D3" />
                <circle cx="12.6747" cy="80.7066" r="1.29337" transform="rotate(-90 12.6747 80.7066)" fill="#3056D3" />
                <circle cx="24.0575" cy="80.7066" r="1.29337" transform="rotate(-90 24.0575 80.7066)" fill="#3056D3" />
                <circle cx="35.4379" cy="80.7066" r="1.29337" transform="rotate(-90 35.4379 80.7066)" fill="#3056D3" />
                <circle cx="46.8197" cy="80.7066" r="1.29337" transform="rotate(-90 46.8197 80.7066)" fill="#3056D3" />
                <circle cx="68.807" cy="80.7066" r="1.29337" transform="rotate(-90 68.807 80.7066)" fill="#3056D3" />
                <circle cx="57.9443" cy="80.7066" r="1.29337" transform="rotate(-90 57.9443 80.7066)" fill="#3056D3" />
                <circle cx="1.29337" cy="69.3249" r="1.29337" transform="rotate(-90 1.29337 69.3249)" fill="#3056D3" />
                <circle cx="12.6747" cy="69.3249" r="1.29337" transform="rotate(-90 12.6747 69.3249)" fill="#3056D3" />
                <circle cx="24.0575" cy="69.3249" r="1.29337" transform="rotate(-90 24.0575 69.3249)" fill="#3056D3" />
                <circle cx="35.4379" cy="69.3249" r="1.29337" transform="rotate(-90 35.4379 69.3249)" fill="#3056D3" />
                <circle cx="46.8197" cy="69.325" r="1.29337" transform="rotate(-90 46.8197 69.325)" fill="#3056D3" />
                <circle cx="68.807" cy="69.325" r="1.29337" transform="rotate(-90 68.807 69.325)" fill="#3056D3" />
                <circle cx="57.9433" cy="69.325" r="1.29337" transform="rotate(-90 57.9433 69.325)" fill="#3056D3" />
                <circle cx="1.29337" cy="57.9433" r="1.29337" transform="rotate(-90 1.29337 57.9433)" fill="#3056D3" />
                <circle cx="1.29337" cy="24.0568" r="1.29337" transform="rotate(-90 1.29337 24.0568)" fill="#3056D3" />
                <circle cx="12.6747" cy="57.9433" r="1.29337" transform="rotate(-90 12.6747 57.9433)" fill="#3056D3" />
                <circle cx="12.6747" cy="24.0568" r="1.29337" transform="rotate(-90 12.6747 24.0568)" fill="#3056D3" />
                <circle cx="24.0575" cy="57.9433" r="1.29337" transform="rotate(-90 24.0575 57.9433)" fill="#3056D3" />
                <circle cx="24.0575" cy="24.0568" r="1.29337" transform="rotate(-90 24.0575 24.0568)" fill="#3056D3" />
                <circle cx="35.4379" cy="57.9433" r="1.29337" transform="rotate(-90 35.4379 57.9433)" fill="#3056D3" />
                <circle cx="35.4379" cy="24.0568" r="1.29337" transform="rotate(-90 35.4379 24.0568)" fill="#3056D3" />
                <circle cx="46.8197" cy="57.9431" r="1.29337" transform="rotate(-90 46.8197 57.9431)" fill="#3056D3" />
                <circle cx="46.8197" cy="24.0567" r="1.29337" transform="rotate(-90 46.8197 24.0567)" fill="#3056D3" />
                <circle cx="68.807" cy="57.9431" r="1.29337" transform="rotate(-90 68.807 57.9431)" fill="#3056D3" />
                <circle cx="68.807" cy="24.0567" r="1.29337" transform="rotate(-90 68.807 24.0567)" fill="#3056D3" />
                <circle cx="57.9433" cy="57.9431" r="1.29337" transform="rotate(-90 57.9433 57.9431)" fill="#3056D3" />
                <circle cx="57.9443" cy="24.0567" r="1.29337" transform="rotate(-90 57.9443 24.0567)" fill="#3056D3" />
                <circle cx="1.29337" cy="46.5615" r="1.29337" transform="rotate(-90 1.29337 46.5615)" fill="#3056D3" />
                <circle cx="1.29337" cy="12.6751" r="1.29337" transform="rotate(-90 1.29337 12.6751)" fill="#3056D3" />
                <circle cx="12.6747" cy="46.5615" r="1.29337" transform="rotate(-90 12.6747 46.5615)" fill="#3056D3" />
                <circle cx="12.6747" cy="12.6751" r="1.29337" transform="rotate(-90 12.6747 12.6751)" fill="#3056D3" />
                <circle cx="24.0575" cy="46.5615" r="1.29337" transform="rotate(-90 24.0575 46.5615)" fill="#3056D3" />
                <circle cx="24.0575" cy="12.6751" r="1.29337" transform="rotate(-90 24.0575 12.6751)" fill="#3056D3" />
                <circle cx="35.4379" cy="46.5615" r="1.29337" transform="rotate(-90 35.4379 46.5615)" fill="#3056D3" />
                <circle cx="35.4379" cy="12.6751" r="1.29337" transform="rotate(-90 35.4379 12.6751)" fill="#3056D3" />
                <circle cx="46.8197" cy="46.5615" r="1.29337" transform="rotate(-90 46.8197 46.5615)" fill="#3056D3" />
                <circle cx="46.8197" cy="12.6751" r="1.29337" transform="rotate(-90 46.8197 12.6751)" fill="#3056D3" />
                <circle cx="68.807" cy="46.5615" r="1.29337" transform="rotate(-90 68.807 46.5615)" fill="#3056D3" />
                <circle cx="68.807" cy="12.6751" r="1.29337" transform="rotate(-90 68.807 12.6751)" fill="#3056D3" />
                <circle cx="57.9433" cy="46.5615" r="1.29337" transform="rotate(-90 57.9433 46.5615)" fill="#3056D3" />
                <circle cx="57.9443" cy="12.6751" r="1.29337" transform="rotate(-90 57.9443 12.6751)" fill="#3056D3" />
                <circle cx="1.29337" cy="35.1798" r="1.29337" transform="rotate(-90 1.29337 35.1798)" fill="#3056D3" />
                <circle cx="1.29337" cy="1.2933" r="1.29337" transform="rotate(-90 1.29337 1.2933)" fill="#3056D3" />
                <circle cx="12.6747" cy="35.1798" r="1.29337" transform="rotate(-90 12.6747 35.1798)" fill="#3056D3" />
                <circle cx="12.6747" cy="1.2933" r="1.29337" transform="rotate(-90 12.6747 1.2933)" fill="#3056D3" />
                <circle cx="24.0575" cy="35.1798" r="1.29337" transform="rotate(-90 24.0575 35.1798)" fill="#3056D3" />
                <circle cx="24.0575" cy="1.29336" r="1.29337" transform="rotate(-90 24.0575 1.29336)" fill="#3056D3" />
                <circle cx="35.4379" cy="35.1798" r="1.29337" transform="rotate(-90 35.4379 35.1798)" fill="#3056D3" />
                <circle cx="35.4379" cy="1.29336" r="1.29337" transform="rotate(-90 35.4379 1.29336)" fill="#3056D3" />
                <circle cx="46.8197" cy="35.18" r="1.29337" transform="rotate(-90 46.8197 35.18)" fill="#3056D3" />
                <circle cx="46.8197" cy="1.29354" r="1.29337" transform="rotate(-90 46.8197 1.29354)" fill="#3056D3" />
                <circle cx="68.807" cy="35.18" r="1.29337" transform="rotate(-90 68.807 35.18)" fill="#3056D3" />
                <circle cx="68.807" cy="1.29354" r="1.29337" transform="rotate(-90 68.807 1.29354)" fill="#3056D3" />
                <circle cx="57.9443" cy="35.18" r="1.29337" transform="rotate(-90 57.9443 35.18)" fill="#3056D3" />
                <circle cx="57.9443" cy="1.29354" r="1.29337" transform="rotate(-90 57.9443 1.29354)" fill="#3056D3" />
              </svg>
            </span>
            <span class="absolute right-0 bottom-0">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z" stroke="#13C296" />
              </svg>
            </span>
          </div>
          <div class="text-center">
            <h4 class="mb-2 text-lg font-medium text-dark">Lestari</h4>
            <p class="mb-5 text-sm font-medium text-body-color">
              0110121173 </p>
            <div class="flex items-center justify-center">

            </div>
          </div>
        </div>
      </div>
      <!-- Muhammad -->
      <div class="w-full px-1 sm:w-1 lg:w-1">
        <div class="wow fadeInUp mb-10" data-wow-delay=".25s">
          <div class="h-170px] relative z-10 mx-auto mb-6 w-[170px] rounded-full">
            <img src="<?php echo base_url('assets/images/team/team5.jpeg') ?>" alt="image" class="w-full rounded-full" />
            <span class="absolute top-0 left-0 z-[-1]">
              <svg width="71" height="82" viewBox="0 0 71 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.29337" cy="80.7066" r="1.29337" transform="rotate(-90 1.29337 80.7066)" fill="#3056D3" />
                <circle cx="12.6747" cy="80.7066" r="1.29337" transform="rotate(-90 12.6747 80.7066)" fill="#3056D3" />
                <circle cx="24.0575" cy="80.7066" r="1.29337" transform="rotate(-90 24.0575 80.7066)" fill="#3056D3" />
                <circle cx="35.4379" cy="80.7066" r="1.29337" transform="rotate(-90 35.4379 80.7066)" fill="#3056D3" />
                <circle cx="46.8197" cy="80.7066" r="1.29337" transform="rotate(-90 46.8197 80.7066)" fill="#3056D3" />
                <circle cx="68.807" cy="80.7066" r="1.29337" transform="rotate(-90 68.807 80.7066)" fill="#3056D3" />
                <circle cx="57.9443" cy="80.7066" r="1.29337" transform="rotate(-90 57.9443 80.7066)" fill="#3056D3" />
                <circle cx="1.29337" cy="69.3249" r="1.29337" transform="rotate(-90 1.29337 69.3249)" fill="#3056D3" />
                <circle cx="12.6747" cy="69.3249" r="1.29337" transform="rotate(-90 12.6747 69.3249)" fill="#3056D3" />
                <circle cx="24.0575" cy="69.3249" r="1.29337" transform="rotate(-90 24.0575 69.3249)" fill="#3056D3" />
                <circle cx="35.4379" cy="69.3249" r="1.29337" transform="rotate(-90 35.4379 69.3249)" fill="#3056D3" />
                <circle cx="46.8197" cy="69.325" r="1.29337" transform="rotate(-90 46.8197 69.325)" fill="#3056D3" />
                <circle cx="68.807" cy="69.325" r="1.29337" transform="rotate(-90 68.807 69.325)" fill="#3056D3" />
                <circle cx="57.9433" cy="69.325" r="1.29337" transform="rotate(-90 57.9433 69.325)" fill="#3056D3" />
                <circle cx="1.29337" cy="57.9433" r="1.29337" transform="rotate(-90 1.29337 57.9433)" fill="#3056D3" />
                <circle cx="1.29337" cy="24.0568" r="1.29337" transform="rotate(-90 1.29337 24.0568)" fill="#3056D3" />
                <circle cx="12.6747" cy="57.9433" r="1.29337" transform="rotate(-90 12.6747 57.9433)" fill="#3056D3" />
                <circle cx="12.6747" cy="24.0568" r="1.29337" transform="rotate(-90 12.6747 24.0568)" fill="#3056D3" />
                <circle cx="24.0575" cy="57.9433" r="1.29337" transform="rotate(-90 24.0575 57.9433)" fill="#3056D3" />
                <circle cx="24.0575" cy="24.0568" r="1.29337" transform="rotate(-90 24.0575 24.0568)" fill="#3056D3" />
                <circle cx="35.4379" cy="57.9433" r="1.29337" transform="rotate(-90 35.4379 57.9433)" fill="#3056D3" />
                <circle cx="35.4379" cy="24.0568" r="1.29337" transform="rotate(-90 35.4379 24.0568)" fill="#3056D3" />
                <circle cx="46.8197" cy="57.9431" r="1.29337" transform="rotate(-90 46.8197 57.9431)" fill="#3056D3" />
                <circle cx="46.8197" cy="24.0567" r="1.29337" transform="rotate(-90 46.8197 24.0567)" fill="#3056D3" />
                <circle cx="68.807" cy="57.9431" r="1.29337" transform="rotate(-90 68.807 57.9431)" fill="#3056D3" />
                <circle cx="68.807" cy="24.0567" r="1.29337" transform="rotate(-90 68.807 24.0567)" fill="#3056D3" />
                <circle cx="57.9433" cy="57.9431" r="1.29337" transform="rotate(-90 57.9433 57.9431)" fill="#3056D3" />
                <circle cx="57.9443" cy="24.0567" r="1.29337" transform="rotate(-90 57.9443 24.0567)" fill="#3056D3" />
                <circle cx="1.29337" cy="46.5615" r="1.29337" transform="rotate(-90 1.29337 46.5615)" fill="#3056D3" />
                <circle cx="1.29337" cy="12.6751" r="1.29337" transform="rotate(-90 1.29337 12.6751)" fill="#3056D3" />
                <circle cx="12.6747" cy="46.5615" r="1.29337" transform="rotate(-90 12.6747 46.5615)" fill="#3056D3" />
                <circle cx="12.6747" cy="12.6751" r="1.29337" transform="rotate(-90 12.6747 12.6751)" fill="#3056D3" />
                <circle cx="24.0575" cy="46.5615" r="1.29337" transform="rotate(-90 24.0575 46.5615)" fill="#3056D3" />
                <circle cx="24.0575" cy="12.6751" r="1.29337" transform="rotate(-90 24.0575 12.6751)" fill="#3056D3" />
                <circle cx="35.4379" cy="46.5615" r="1.29337" transform="rotate(-90 35.4379 46.5615)" fill="#3056D3" />
                <circle cx="35.4379" cy="12.6751" r="1.29337" transform="rotate(-90 35.4379 12.6751)" fill="#3056D3" />
                <circle cx="46.8197" cy="46.5615" r="1.29337" transform="rotate(-90 46.8197 46.5615)" fill="#3056D3" />
                <circle cx="46.8197" cy="12.6751" r="1.29337" transform="rotate(-90 46.8197 12.6751)" fill="#3056D3" />
                <circle cx="68.807" cy="46.5615" r="1.29337" transform="rotate(-90 68.807 46.5615)" fill="#3056D3" />
                <circle cx="68.807" cy="12.6751" r="1.29337" transform="rotate(-90 68.807 12.6751)" fill="#3056D3" />
                <circle cx="57.9433" cy="46.5615" r="1.29337" transform="rotate(-90 57.9433 46.5615)" fill="#3056D3" />
                <circle cx="57.9443" cy="12.6751" r="1.29337" transform="rotate(-90 57.9443 12.6751)" fill="#3056D3" />
                <circle cx="1.29337" cy="35.1798" r="1.29337" transform="rotate(-90 1.29337 35.1798)" fill="#3056D3" />
                <circle cx="1.29337" cy="1.2933" r="1.29337" transform="rotate(-90 1.29337 1.2933)" fill="#3056D3" />
                <circle cx="12.6747" cy="35.1798" r="1.29337" transform="rotate(-90 12.6747 35.1798)" fill="#3056D3" />
                <circle cx="12.6747" cy="1.2933" r="1.29337" transform="rotate(-90 12.6747 1.2933)" fill="#3056D3" />
                <circle cx="24.0575" cy="35.1798" r="1.29337" transform="rotate(-90 24.0575 35.1798)" fill="#3056D3" />
                <circle cx="24.0575" cy="1.29336" r="1.29337" transform="rotate(-90 24.0575 1.29336)" fill="#3056D3" />
                <circle cx="35.4379" cy="35.1798" r="1.29337" transform="rotate(-90 35.4379 35.1798)" fill="#3056D3" />
                <circle cx="35.4379" cy="1.29336" r="1.29337" transform="rotate(-90 35.4379 1.29336)" fill="#3056D3" />
                <circle cx="46.8197" cy="35.18" r="1.29337" transform="rotate(-90 46.8197 35.18)" fill="#3056D3" />
                <circle cx="46.8197" cy="1.29354" r="1.29337" transform="rotate(-90 46.8197 1.29354)" fill="#3056D3" />
                <circle cx="68.807" cy="35.18" r="1.29337" transform="rotate(-90 68.807 35.18)" fill="#3056D3" />
                <circle cx="68.807" cy="1.29354" r="1.29337" transform="rotate(-90 68.807 1.29354)" fill="#3056D3" />
                <circle cx="57.9443" cy="35.18" r="1.29337" transform="rotate(-90 57.9443 35.18)" fill="#3056D3" />
                <circle cx="57.9443" cy="1.29354" r="1.29337" transform="rotate(-90 57.9443 1.29354)" fill="#3056D3" />
              </svg>
            </span>
            <span class="absolute right-0 bottom-0">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z" stroke="#13C296" />
              </svg>
            </span>
          </div>
          <div class="text-center">
            <h4 class="mb-2 text-lg font-medium text-dark">
              Muhammad Komarudin
            </h4>
            <p class="mb-5 text-sm font-medium text-body-color">
              0110121168
            </p>
            <div class="flex items-center justify-center">

            </div>
          </div>
        </div>
      </div>
      <!-- Rena -->
      <div class="w-full px-1 sm:w-1 lg:w-1">
        <div class="wow fadeInUp mb-10" data-wow-delay=".2s">
          <div class="h-170px] relative z-10 mx-auto mb-6 w-[170px] rounded-full">
            <img src="<?php echo base_url('assets/images/team/team3.jpeg') ?>" alt="image" class="w-full rounded-full" />
            <span class="absolute top-0 left-0 z-[-1]">
              <svg width="71" height="82" viewBox="0 0 71 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.29337" cy="80.7066" r="1.29337" transform="rotate(-90 1.29337 80.7066)" fill="#3056D3" />
                <circle cx="12.6747" cy="80.7066" r="1.29337" transform="rotate(-90 12.6747 80.7066)" fill="#3056D3" />
                <circle cx="24.0575" cy="80.7066" r="1.29337" transform="rotate(-90 24.0575 80.7066)" fill="#3056D3" />
                <circle cx="35.4379" cy="80.7066" r="1.29337" transform="rotate(-90 35.4379 80.7066)" fill="#3056D3" />
                <circle cx="46.8197" cy="80.7066" r="1.29337" transform="rotate(-90 46.8197 80.7066)" fill="#3056D3" />
                <circle cx="68.807" cy="80.7066" r="1.29337" transform="rotate(-90 68.807 80.7066)" fill="#3056D3" />
                <circle cx="57.9443" cy="80.7066" r="1.29337" transform="rotate(-90 57.9443 80.7066)" fill="#3056D3" />
                <circle cx="1.29337" cy="69.3249" r="1.29337" transform="rotate(-90 1.29337 69.3249)" fill="#3056D3" />
                <circle cx="12.6747" cy="69.3249" r="1.29337" transform="rotate(-90 12.6747 69.3249)" fill="#3056D3" />
                <circle cx="24.0575" cy="69.3249" r="1.29337" transform="rotate(-90 24.0575 69.3249)" fill="#3056D3" />
                <circle cx="35.4379" cy="69.3249" r="1.29337" transform="rotate(-90 35.4379 69.3249)" fill="#3056D3" />
                <circle cx="46.8197" cy="69.325" r="1.29337" transform="rotate(-90 46.8197 69.325)" fill="#3056D3" />
                <circle cx="68.807" cy="69.325" r="1.29337" transform="rotate(-90 68.807 69.325)" fill="#3056D3" />
                <circle cx="57.9433" cy="69.325" r="1.29337" transform="rotate(-90 57.9433 69.325)" fill="#3056D3" />
                <circle cx="1.29337" cy="57.9433" r="1.29337" transform="rotate(-90 1.29337 57.9433)" fill="#3056D3" />
                <circle cx="1.29337" cy="24.0568" r="1.29337" transform="rotate(-90 1.29337 24.0568)" fill="#3056D3" />
                <circle cx="12.6747" cy="57.9433" r="1.29337" transform="rotate(-90 12.6747 57.9433)" fill="#3056D3" />
                <circle cx="12.6747" cy="24.0568" r="1.29337" transform="rotate(-90 12.6747 24.0568)" fill="#3056D3" />
                <circle cx="24.0575" cy="57.9433" r="1.29337" transform="rotate(-90 24.0575 57.9433)" fill="#3056D3" />
                <circle cx="24.0575" cy="24.0568" r="1.29337" transform="rotate(-90 24.0575 24.0568)" fill="#3056D3" />
                <circle cx="35.4379" cy="57.9433" r="1.29337" transform="rotate(-90 35.4379 57.9433)" fill="#3056D3" />
                <circle cx="35.4379" cy="24.0568" r="1.29337" transform="rotate(-90 35.4379 24.0568)" fill="#3056D3" />
                <circle cx="46.8197" cy="57.9431" r="1.29337" transform="rotate(-90 46.8197 57.9431)" fill="#3056D3" />
                <circle cx="46.8197" cy="24.0567" r="1.29337" transform="rotate(-90 46.8197 24.0567)" fill="#3056D3" />
                <circle cx="68.807" cy="57.9431" r="1.29337" transform="rotate(-90 68.807 57.9431)" fill="#3056D3" />
                <circle cx="68.807" cy="24.0567" r="1.29337" transform="rotate(-90 68.807 24.0567)" fill="#3056D3" />
                <circle cx="57.9433" cy="57.9431" r="1.29337" transform="rotate(-90 57.9433 57.9431)" fill="#3056D3" />
                <circle cx="57.9443" cy="24.0567" r="1.29337" transform="rotate(-90 57.9443 24.0567)" fill="#3056D3" />
                <circle cx="1.29337" cy="46.5615" r="1.29337" transform="rotate(-90 1.29337 46.5615)" fill="#3056D3" />
                <circle cx="1.29337" cy="12.6751" r="1.29337" transform="rotate(-90 1.29337 12.6751)" fill="#3056D3" />
                <circle cx="12.6747" cy="46.5615" r="1.29337" transform="rotate(-90 12.6747 46.5615)" fill="#3056D3" />
                <circle cx="12.6747" cy="12.6751" r="1.29337" transform="rotate(-90 12.6747 12.6751)" fill="#3056D3" />
                <circle cx="24.0575" cy="46.5615" r="1.29337" transform="rotate(-90 24.0575 46.5615)" fill="#3056D3" />
                <circle cx="24.0575" cy="12.6751" r="1.29337" transform="rotate(-90 24.0575 12.6751)" fill="#3056D3" />
                <circle cx="35.4379" cy="46.5615" r="1.29337" transform="rotate(-90 35.4379 46.5615)" fill="#3056D3" />
                <circle cx="35.4379" cy="12.6751" r="1.29337" transform="rotate(-90 35.4379 12.6751)" fill="#3056D3" />
                <circle cx="46.8197" cy="46.5615" r="1.29337" transform="rotate(-90 46.8197 46.5615)" fill="#3056D3" />
                <circle cx="46.8197" cy="12.6751" r="1.29337" transform="rotate(-90 46.8197 12.6751)" fill="#3056D3" />
                <circle cx="68.807" cy="46.5615" r="1.29337" transform="rotate(-90 68.807 46.5615)" fill="#3056D3" />
                <circle cx="68.807" cy="12.6751" r="1.29337" transform="rotate(-90 68.807 12.6751)" fill="#3056D3" />
                <circle cx="57.9433" cy="46.5615" r="1.29337" transform="rotate(-90 57.9433 46.5615)" fill="#3056D3" />
                <circle cx="57.9443" cy="12.6751" r="1.29337" transform="rotate(-90 57.9443 12.6751)" fill="#3056D3" />
                <circle cx="1.29337" cy="35.1798" r="1.29337" transform="rotate(-90 1.29337 35.1798)" fill="#3056D3" />
                <circle cx="1.29337" cy="1.2933" r="1.29337" transform="rotate(-90 1.29337 1.2933)" fill="#3056D3" />
                <circle cx="12.6747" cy="35.1798" r="1.29337" transform="rotate(-90 12.6747 35.1798)" fill="#3056D3" />
                <circle cx="12.6747" cy="1.2933" r="1.29337" transform="rotate(-90 12.6747 1.2933)" fill="#3056D3" />
                <circle cx="24.0575" cy="35.1798" r="1.29337" transform="rotate(-90 24.0575 35.1798)" fill="#3056D3" />
                <circle cx="24.0575" cy="1.29336" r="1.29337" transform="rotate(-90 24.0575 1.29336)" fill="#3056D3" />
                <circle cx="35.4379" cy="35.1798" r="1.29337" transform="rotate(-90 35.4379 35.1798)" fill="#3056D3" />
                <circle cx="35.4379" cy="1.29336" r="1.29337" transform="rotate(-90 35.4379 1.29336)" fill="#3056D3" />
                <circle cx="46.8197" cy="35.18" r="1.29337" transform="rotate(-90 46.8197 35.18)" fill="#3056D3" />
                <circle cx="46.8197" cy="1.29354" r="1.29337" transform="rotate(-90 46.8197 1.29354)" fill="#3056D3" />
                <circle cx="68.807" cy="35.18" r="1.29337" transform="rotate(-90 68.807 35.18)" fill="#3056D3" />
                <circle cx="68.807" cy="1.29354" r="1.29337" transform="rotate(-90 68.807 1.29354)" fill="#3056D3" />
                <circle cx="57.9443" cy="35.18" r="1.29337" transform="rotate(-90 57.9443 35.18)" fill="#3056D3" />
                <circle cx="57.9443" cy="1.29354" r="1.29337" transform="rotate(-90 57.9443 1.29354)" fill="#3056D3" />
              </svg>
            </span>
            <span class="absolute right-0 bottom-0">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z" stroke="#13C296" />
              </svg>
            </span>
          </div>
          <div class="text-center">
            <h4 class="mb-2 text-lg font-medium text-dark">
              Renawati
            </h4>
            <p class="mb-5 text-sm font-medium text-body-color">
              0110121166
            </p>
            <div class="flex items-center justify-center">

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ====== Team Section End -->