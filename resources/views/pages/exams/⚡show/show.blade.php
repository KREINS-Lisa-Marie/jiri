@php
    $currentexam = '';
    $direction = '';
    $sortable = '';
    $exams = [];
@endphp

<main class="main-content" id="dashboard-top">
    <x-topbar.topbar>Créer une épreuve</x-topbar.topbar>
    <div class="main-container">
        <section>
            <div class="exam-container m-b-32">
                <x-titles.h2>
                    Epreuve
                </x-titles.h2>
                <dl class="d-flex flex-row wrap gap-32 space-between a-i-center">
                    <div>
                        <x-lists.definition-term>
                            Nom épreuve
                        </x-lists.definition-term>
                        <x-lists.definition>
                            Projet web 2026 - 2027
                        </x-lists.definition>
                    </div>

                    <div>
                        <x-lists.definition-term>
                            Date
                        </x-lists.definition-term>
                        <x-lists.definition>
                            12.08.26
                        </x-lists.definition>
                    </div>

                    <div>
                        <x-lists.definition-term>
                            Heure
                        </x-lists.definition-term>
                        <x-lists.definition>
                            13h00 - 17h00
                        </x-lists.definition>
                    </div>

                    <div class="btn-dd">
                        <x-lists.definition-term>
                            Statut de l’évaluation
                        </x-lists.definition-term>
                        <x-lists.definition>
                            <x-buttons.btn-btn class="" wire="">
                                Non terminé {{--Terminé--}}
                            </x-buttons.btn-btn>
                        </x-lists.definition>
                    </div>
                </dl>

                <x-buttons.simple-pirmary-btn>
                    Modifier les détails de l’épreuve
                </x-buttons.simple-pirmary-btn>
            </div>
        </section>

        <section class="exam-container m-b-32">
            <x-titles.h2>
                Contacts
            </x-titles.h2>
            <div class="d-flex flex-row gap-32 wrap m-b-32" >
                <div class="evaluator-container container-left">
                    <x-titles.h3>
                        Évaluateurs
                    </x-titles.h3>
                    <ul class="two-columns contacts-grid">
                        @for($i=0; $i<=5; $i++)
                        <li class="d-flex flex-row space-between a-i-center">
                            <p>
                                Jane Mitchell
                            </p>
                            <div class="d-flex flex-row gap-4 wrap">
                                   <span class="trash-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                     viewBox="0 0 18 18" fill="none">
          <g clip-path="url(#clip0_176_1509)">
            <path
                d="M13.5704 17.0002H4.43043C4.23802 16.9957 4.0484 16.9533 3.87239 16.8754C3.69639 16.7976 3.53744 16.6858 3.40464 16.5465C3.27184 16.4072 3.16779 16.2431 3.09844 16.0636C3.02908 15.8841 2.99578 15.6926 3.00043 15.5002V5.61523H4.00043V15.5002C3.99565 15.5613 4.00301 15.6228 4.02206 15.681C4.04112 15.7393 4.0715 15.7932 4.11146 15.8396C4.15142 15.8861 4.20017 15.9242 4.25491 15.9518C4.30965 15.9793 4.3693 15.9958 4.43043 16.0002H13.5704C13.6316 15.9958 13.6912 15.9793 13.7459 15.9518C13.8007 15.9242 13.8494 15.8861 13.8894 15.8396C13.9294 15.7932 13.9597 15.7393 13.9788 15.681C13.9978 15.6228 14.0052 15.5613 14.0004 15.5002V5.61523H15.0004V15.5002C15.0051 15.6926 14.9718 15.8841 14.9024 16.0636C14.8331 16.2431 14.729 16.4072 14.5962 16.5465C14.4634 16.6858 14.3045 16.7976 14.1285 16.8754C13.9525 16.9533 13.7628 16.9957 13.5704 17.0002Z"
                fill="black"/>
            <path
                d="M15.39 4.5H2.5C2.36739 4.5 2.24021 4.44732 2.14645 4.35355C2.05268 4.25979 2 4.13261 2 4C2 3.86739 2.05268 3.74021 2.14645 3.64645C2.24021 3.55268 2.36739 3.5 2.5 3.5H15.39C15.5226 3.5 15.6498 3.55268 15.7436 3.64645C15.8373 3.74021 15.89 3.86739 15.89 4C15.89 4.13261 15.8373 4.25979 15.7436 4.35355C15.6498 4.44732 15.5226 4.5 15.39 4.5Z"
                fill="black"/>
            <path d="M10.5 6.5H11.5V14H10.5V6.5Z" fill="black"/>
            <path d="M6.5 6.5H7.5V14H6.5V6.5Z" fill="black"/>
            <path
                d="M11.5 2.93H10.55V2H7.45V2.93H6.5V2C6.49968 1.74322 6.59815 1.49616 6.775 1.31C6.95186 1.12384 7.19354 1.01284 7.45 1H10.55C10.8065 1.01284 11.0481 1.12384 11.225 1.31C11.4019 1.49616 11.5003 1.74322 11.5 2V2.93Z"
                fill="black"/>
          </g>
          <defs>
            <clipPath id="clip0_176_1509">
              <rect width="18" height="18" fill="white"/>
            </clipPath>
          </defs>
        </svg>
                                   </span>
                                <span class="direction-switch-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15"
                                                     viewBox="0 0 17 15" fill="none">
          <path d="M0.5 7.5H16.5M9.5 14.5L16.5 7.5L9.5 0.5" stroke-linecap="round" stroke-linejoin="round"
                stroke="black"/>
        </svg>
                                </span>
                            </div>
                        </li>
                        @endfor
                    </ul>
                </div>
                <div class="student-container container-right">
                    <x-titles.h3>
                        Évalués
                    </x-titles.h3>

                    <ul class="two-columns contacts-grid">
                        @for($i=0; $i<=5; $i++)
                            <li class="d-flex flex-row space-between a-i-center">
                                <p>
                                    Jane Mitchell
                                </p>
                                <div class="d-flex flex-row gap-4 wrap">
                                   <span class="trash-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                     viewBox="0 0 18 18" fill="none">
          <g clip-path="url(#clip0_176_1509)">
            <path
                d="M13.5704 17.0002H4.43043C4.23802 16.9957 4.0484 16.9533 3.87239 16.8754C3.69639 16.7976 3.53744 16.6858 3.40464 16.5465C3.27184 16.4072 3.16779 16.2431 3.09844 16.0636C3.02908 15.8841 2.99578 15.6926 3.00043 15.5002V5.61523H4.00043V15.5002C3.99565 15.5613 4.00301 15.6228 4.02206 15.681C4.04112 15.7393 4.0715 15.7932 4.11146 15.8396C4.15142 15.8861 4.20017 15.9242 4.25491 15.9518C4.30965 15.9793 4.3693 15.9958 4.43043 16.0002H13.5704C13.6316 15.9958 13.6912 15.9793 13.7459 15.9518C13.8007 15.9242 13.8494 15.8861 13.8894 15.8396C13.9294 15.7932 13.9597 15.7393 13.9788 15.681C13.9978 15.6228 14.0052 15.5613 14.0004 15.5002V5.61523H15.0004V15.5002C15.0051 15.6926 14.9718 15.8841 14.9024 16.0636C14.8331 16.2431 14.729 16.4072 14.5962 16.5465C14.4634 16.6858 14.3045 16.7976 14.1285 16.8754C13.9525 16.9533 13.7628 16.9957 13.5704 17.0002Z"
                fill="black"/>
            <path
                d="M15.39 4.5H2.5C2.36739 4.5 2.24021 4.44732 2.14645 4.35355C2.05268 4.25979 2 4.13261 2 4C2 3.86739 2.05268 3.74021 2.14645 3.64645C2.24021 3.55268 2.36739 3.5 2.5 3.5H15.39C15.5226 3.5 15.6498 3.55268 15.7436 3.64645C15.8373 3.74021 15.89 3.86739 15.89 4C15.89 4.13261 15.8373 4.25979 15.7436 4.35355C15.6498 4.44732 15.5226 4.5 15.39 4.5Z"
                fill="black"/>
            <path d="M10.5 6.5H11.5V14H10.5V6.5Z" fill="black"/>
            <path d="M6.5 6.5H7.5V14H6.5V6.5Z" fill="black"/>
            <path
                d="M11.5 2.93H10.55V2H7.45V2.93H6.5V2C6.49968 1.74322 6.59815 1.49616 6.775 1.31C6.95186 1.12384 7.19354 1.01284 7.45 1H10.55C10.8065 1.01284 11.0481 1.12384 11.225 1.31C11.4019 1.49616 11.5003 1.74322 11.5 2V2.93Z"
                fill="black"/>
          </g>
          <defs>
            <clipPath id="clip0_176_1509">
              <rect width="18" height="18" fill="white"/>
            </clipPath>
          </defs>
        </svg>
                                   </span>
                                    <span class="direction-switch-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15"
                                                     viewBox="0 0 17 15" fill="none">
  <path d="M16.5 7.5H0.5M7.5 14.5L0.5 7.5L7.5 0.5" stroke-linecap="round" stroke-linejoin="round" stroke="black"/>
</svg>
                                </span>
                                </div>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>

            <x-buttons.btn-btn class="medium contacts-show-btn" wire="">
                Modifier les contacts de l’épreuve
            </x-buttons.btn-btn>
        </section>

        <section class="exam-container m-b-32">
            <x-titles.h2>
                Projets à évaluer
            </x-titles.h2>

            <ul>
                @for($k=0; $k<=4; $k++)
                <li class="project-items">
                    <p class="d-flex flex-row  a-i-center gap-24 m-b-8 italic">
                        CV
                        <span class="trash-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
  <g clip-path="url(#clip0_176_1509)">
    <path d="M13.5704 17.0002H4.43043C4.23802 16.9957 4.0484 16.9533 3.87239 16.8754C3.69639 16.7976 3.53744 16.6858 3.40464 16.5465C3.27184 16.4072 3.16779 16.2431 3.09844 16.0636C3.02908 15.8841 2.99578 15.6926 3.00043 15.5002V5.61523H4.00043V15.5002C3.99565 15.5613 4.00301 15.6228 4.02206 15.681C4.04112 15.7393 4.0715 15.7932 4.11146 15.8396C4.15142 15.8861 4.20017 15.9242 4.25491 15.9518C4.30965 15.9793 4.3693 15.9958 4.43043 16.0002H13.5704C13.6316 15.9958 13.6912 15.9793 13.7459 15.9518C13.8007 15.9242 13.8494 15.8861 13.8894 15.8396C13.9294 15.7932 13.9597 15.7393 13.9788 15.681C13.9978 15.6228 14.0052 15.5613 14.0004 15.5002V5.61523H15.0004V15.5002C15.0051 15.6926 14.9718 15.8841 14.9024 16.0636C14.8331 16.2431 14.729 16.4072 14.5962 16.5465C14.4634 16.6858 14.3045 16.7976 14.1285 16.8754C13.9525 16.9533 13.7628 16.9957 13.5704 17.0002Z" fill="black"/>
    <path d="M15.39 4.5H2.5C2.36739 4.5 2.24021 4.44732 2.14645 4.35355C2.05268 4.25979 2 4.13261 2 4C2 3.86739 2.05268 3.74021 2.14645 3.64645C2.24021 3.55268 2.36739 3.5 2.5 3.5H15.39C15.5226 3.5 15.6498 3.55268 15.7436 3.64645C15.8373 3.74021 15.89 3.86739 15.89 4C15.89 4.13261 15.8373 4.25979 15.7436 4.35355C15.6498 4.44732 15.5226 4.5 15.39 4.5Z" fill="black"/>
    <path d="M10.5 6.5H11.5V14H10.5V6.5Z" fill="black"/>
    <path d="M6.5 6.5H7.5V14H6.5V6.5Z" fill="black"/>
    <path d="M11.5 2.93H10.55V2H7.45V2.93H6.5V2C6.49968 1.74322 6.59815 1.49616 6.775 1.31C6.95186 1.12384 7.19354 1.01284 7.45 1H10.55C10.8065 1.01284 11.0481 1.12384 11.225 1.31C11.4019 1.49616 11.5003 1.74322 11.5 2V2.93Z" fill="black"/>
  </g>
  <defs>
    <clipPath id="clip0_176_1509">
      <rect width="18" height="18" fill="white"/>
    </clipPath>
  </defs>
</svg>
                                    </span>
                    </p>
                    <div class="two-columns">
                        <div class="m-l-12">
                            <p class="m-b-12 medium">
                                Critères du projet
                            </p>
                            <ul class="d-flex flex-row wrap criteria-list gap-8 m-b-32">
                                @for($i =0; $i<4; $i++)
                                    <li >
                                        <div class="d-flex gap-4 flex-row a-i-center">
                                        <x-fields.text-no-label name="criteria" id="criteria" value="" placeholder="Headingsmap" wire="criteria">
                                            Critère du projet*
                                        </x-fields.text-no-label>

                                            <span class="trash-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                             viewBox="0 0 18 18" fill="none">
  <g clip-path="url(#clip0_176_1509)">
    <path
        d="M13.5704 17.0002H4.43043C4.23802 16.9957 4.0484 16.9533 3.87239 16.8754C3.69639 16.7976 3.53744 16.6858 3.40464 16.5465C3.27184 16.4072 3.16779 16.2431 3.09844 16.0636C3.02908 15.8841 2.99578 15.6926 3.00043 15.5002V5.61523H4.00043V15.5002C3.99565 15.5613 4.00301 15.6228 4.02206 15.681C4.04112 15.7393 4.0715 15.7932 4.11146 15.8396C4.15142 15.8861 4.20017 15.9242 4.25491 15.9518C4.30965 15.9793 4.3693 15.9958 4.43043 16.0002H13.5704C13.6316 15.9958 13.6912 15.9793 13.7459 15.9518C13.8007 15.9242 13.8494 15.8861 13.8894 15.8396C13.9294 15.7932 13.9597 15.7393 13.9788 15.681C13.9978 15.6228 14.0052 15.5613 14.0004 15.5002V5.61523H15.0004V15.5002C15.0051 15.6926 14.9718 15.8841 14.9024 16.0636C14.8331 16.2431 14.729 16.4072 14.5962 16.5465C14.4634 16.6858 14.3045 16.7976 14.1285 16.8754C13.9525 16.9533 13.7628 16.9957 13.5704 17.0002Z"
        fill="black"/>
    <path
        d="M15.39 4.5H2.5C2.36739 4.5 2.24021 4.44732 2.14645 4.35355C2.05268 4.25979 2 4.13261 2 4C2 3.86739 2.05268 3.74021 2.14645 3.64645C2.24021 3.55268 2.36739 3.5 2.5 3.5H15.39C15.5226 3.5 15.6498 3.55268 15.7436 3.64645C15.8373 3.74021 15.89 3.86739 15.89 4C15.89 4.13261 15.8373 4.25979 15.7436 4.35355C15.6498 4.44732 15.5226 4.5 15.39 4.5Z"
        fill="black"/>
    <path d="M10.5 6.5H11.5V14H10.5V6.5Z" fill="black"/>
    <path d="M6.5 6.5H7.5V14H6.5V6.5Z" fill="black"/>
    <path
        d="M11.5 2.93H10.55V2H7.45V2.93H6.5V2C6.49968 1.74322 6.59815 1.49616 6.775 1.31C6.95186 1.12384 7.19354 1.01284 7.45 1H10.55C10.8065 1.01284 11.0481 1.12384 11.225 1.31C11.4019 1.49616 11.5003 1.74322 11.5 2V2.93Z"
        fill="black"/>
  </g>
  <defs>
    <clipPath id="clip0_176_1509">
      <rect width="18" height="18" fill="white"/>
    </clipPath>
  </defs>
</svg>
                                    </span>
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>

                        <dl>
                            <x-lists.definition-term>
                                Ponderation
                            </x-lists.definition-term>
                            <x-lists.definition>
                                30%
                            </x-lists.definition>
                        </dl>
                    </div>

                </li>
                @endfor
            </ul>
            <x-buttons.simple-pirmary-btn>
                Modifier les projets de l’épreuve
            </x-buttons.simple-pirmary-btn>

        </section>
        <div class="btn-container">
            <x-buttons.simple-pirmary-btn>
                Voir le dashboard de l’épreuve
            </x-buttons.simple-pirmary-btn>
        </div>
    </div>
</main>

