@extends('layouts.default')
@section('content')
  <div class="content-body">
    <div class="container-fluid">
      <div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
        <h2 class="font-w600 title mb-2 me-auto ">Dashboard</h2>
      </div>
      <div class="row">
        <!-- CARD 1: TOTAL PENILAIAN -->
        <div class="col-xl-3 col-sm-6 m-t35">
          <div class="card card-coin">
            <div class="card-body text-center">
              <svg class="mb-3 currency-icon" width="80" height="80" viewBox="0 0 80 80" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="40" fill="#EEF2FF" />
                <!-- Clipboard dengan Checklist -->
                <rect x="24" y="16" width="32" height="48" rx="4" stroke="#4F46E5" stroke-width="3" fill="none" />
                <path d="M30 34 L36 40 L50 26" stroke="#4F46E5" stroke-width="3" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path d="M30 46 L36 52 L50 38" stroke="#4F46E5" stroke-width="3" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              <h2 class="text-black mb-2 font-w600">1.284</h2>
              <p class="mb-0 fs-14">
                <svg width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g filter="url(#filter0_d1)">
                    <path d="M5 16C5.91797 14.9157 8.89728 11.7277 10.5 10L16.5 13L23.5 4" stroke="#2BC155"
                      stroke-width="2" stroke-linecap="round" />
                  </g>
                  <defs>
                    <filter id="filter0_d1" x="-3.05176e-05" y="-6.10352e-05" width="28.5001" height="22.0001"
                      filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix" />
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                      <feOffset dy="1" />
                      <feGaussianBlur stdDeviation="2" />
                      <feColorMatrix type="matrix"
                        values="0 0 0 0 0.172549 0 0 0 0 0.72549 0 0 0 0 0.337255 0 0 0 0.61 0" />
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                    </filter>
                  </defs>
                </svg>
                <span class="text-success me-1">+12%</span> This month
              </p>
            </div>
          </div>
        </div>

        <!-- CARD 2: RATA-RATA NOC L1 -->
        <div class="col-xl-3 col-sm-6 m-t35">
          <div class="card card-coin">
            <div class="card-body text-center">
              <svg class="mb-3 currency-icon" width="80" height="80" viewBox="0 0 80 80" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="40" fill="#F0FDF4" />
                <!-- Jaringan / Server Node -->
                <circle cx="40" cy="24" r="7" stroke="#059669" stroke-width="3" fill="none" />
                <circle cx="26" cy="56" r="7" stroke="#059669" stroke-width="3" fill="none" />
                <circle cx="54" cy="56" r="7" stroke="#059669" stroke-width="3" fill="none" />
                <path d="M40 31 L26 49 M40 31 L54 49 M26 63 L54 63" stroke="#059669" stroke-width="3"
                  stroke-linecap="round" />
              </svg>
              <h2 class="text-black mb-2 font-w600">92,4%</h2>
              <p class="mb-0 fs-14">
                <svg width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g filter="url(#filter0_d1)">
                    <path d="M5 16C5.91797 14.9157 8.89728 11.7277 10.5 10L16.5 13L23.5 4" stroke="#2BC155"
                      stroke-width="2" stroke-linecap="round" />
                  </g>
                  <defs>
                    <filter id="filter0_d1" x="-3.05176e-05" y="-6.10352e-05" width="28.5001" height="22.0001"
                      filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix" />
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                      <feOffset dy="1" />
                      <feGaussianBlur stdDeviation="2" />
                      <feColorMatrix type="matrix"
                        values="0 0 0 0 0.172549 0 0 0 0 0.72549 0 0 0 0 0.337255 0 0 0 0.61 0" />
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                    </filter>
                  </defs>
                </svg>
                <span class="text-success me-1">+2,1%</span> This month
              </p>
            </div>
          </div>
        </div>

        <!-- CARD 3: RATA-RATA SBU -->
        <div class="col-xl-3 col-sm-6 m-t35">
          <div class="card card-coin">
            <div class="card-body text-center">
              <svg class="mb-3 currency-icon" width="80" height="80" viewBox="0 0 80 80" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="40" fill="#FFF7ED" />
                <!-- Gedung / Business Unit -->
                <rect x="24" y="28" width="32" height="32" rx="3" stroke="#D97706" stroke-width="3" fill="none" />
                <path d="M36 28 V18 L44 18 V28 M31 36 H49 M31 44 H49 M31 52 H49" stroke="#D97706" stroke-width="3"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <h2 class="text-black mb-2 font-w600">87,6%</h2>
              <p class="mb-0 fs-14">
                <svg width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g filter="url(#filter0_d1)">
                    <path d="M5 14C6.5 15.5 9 18 10.5 16L16.5 10L23.5 16" stroke="#FF5B5B" stroke-width="2"
                      stroke-linecap="round" />
                  </g>
                  <defs>
                    <filter id="filter0_d1" x="-3.05176e-05" y="-6.10352e-05" width="28.5001" height="22.0001"
                      filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix" />
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                      <feOffset dy="1" />
                      <feGaussianBlur stdDeviation="2" />
                      <feColorMatrix type="matrix"
                        values="0 0 0 0 0.756863 0 0 0 0 0.203922 0 0 0 0 0.203922 0 0 0 0.61 0" />
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                    </filter>
                  </defs>
                </svg>
                <span class="text-danger me-1">-0,8%</span> This month
              </p>
            </div>
          </div>
        </div>

        <!-- CARD 4: NEED ATTENTION -->
        <div class="col-xl-3 col-sm-6 m-t35">
          <div class="card card-coin">
            <div class="card-body text-center">
              <svg class="mb-3 currency-icon" width="80" height="80" viewBox="0 0 80 80" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="40" fill="#FEF2F2" />
                <!-- Segitiga Peringatan -->
                <path d="M40 16 L12 64 L68 64 L40 16Z" stroke="#DC2626" stroke-width="3" fill="none"
                  stroke-linejoin="round" />
                <path d="M40 34 V46" stroke="#DC2626" stroke-width="4" stroke-linecap="round" />
                <circle cx="40" cy="56" r="2.5" fill="#DC2626" />
              </svg>
              <h2 class="text-black mb-2 font-w600">34</h2>
              <p class="mb-0 fs-14">
                <svg width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g filter="url(#filter0_d1)">
                    <path d="M5 14C6.5 15.5 9 18 10.5 16L16.5 10L23.5 16" stroke="#FF5B5B" stroke-width="2"
                      stroke-linecap="round" />
                  </g>
                  <defs>
                    <filter id="filter0_d1" x="-3.05176e-05" y="-6.10352e-05" width="28.5001" height="22.0001"
                      filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix" />
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                      <feOffset dy="1" />
                      <feGaussianBlur stdDeviation="2" />
                      <feColorMatrix type="matrix"
                        values="0 0 0 0 0.756863 0 0 0 0 0.203922 0 0 0 0 0.203922 0 0 0 0.61 0" />
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                    </filter>
                  </defs>
                </svg>
                <span class="text-danger me-1">+5</span> This month
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection