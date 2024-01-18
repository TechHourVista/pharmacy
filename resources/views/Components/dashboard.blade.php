
 
@section('title')
    Dashboard
@endsection


@extends('layouts.NavBar')
    
@extends('layouts.SlideBar')

<main class='main'>

 <!-- header dashboard   -->
    <div class="header-dashboard">
        <h3 class='title-dash'>Dashboard <br> <span class='para-dash'>A quick data overview of the inventory.</span></h3>
        <div class="div-download">
            Download Report
            <svg class='victor-download-dash' xmlns="http://www.w3.org/2000/svg" width="8" height="5" viewBox="0 0 8 5" fill="none">
            <path d="M6.77405 0.209396L3.99642 2.98702L1.21879 0.209396C0.939597 -0.0697987 0.488591 -0.0697987 0.209396 0.209396C-0.0697987 0.488591 -0.0697987 0.939597 0.209396 1.21879L3.4953 4.5047C3.7745 4.78389 4.2255 4.78389 4.5047 4.5047L7.7906 1.21879C8.0698 0.939597 8.0698 0.488591 7.7906 0.209396C7.51141 -0.0626398 7.05324 -0.0697987 6.77405 0.209396Z" fill="#1D242E"/>
            </svg>
        </div>
    </div>


<!-- card info dashboard -->
    <div class="container-card-info">
        <div class="card-info">
            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" fill="none">
            <g clip-path="url(#clip0_33_655)">
                <path d="M16.1875 20.0417H12.3333V15.4167H16.1875V11.5625H20.8125V15.4167H24.6667V20.0417H20.8125V23.8958H16.1875V20.0417ZM18.5 3.08333L6.16667 7.70833V17.0971C6.16667 24.8825 11.4238 32.1437 18.5 33.9167C25.5763 32.1437 30.8333 24.8825 30.8333 17.0971V7.70833L18.5 3.08333ZM27.75 17.0971C27.75 23.2637 23.8188 28.9679 18.5 30.71C13.1813 28.9679 9.25 23.2792 9.25 17.0971V9.85124L18.5 6.38249L27.75 9.85124V17.0971Z" fill="#01A768"/>
            </g>
            <defs>
                <clipPath id="clip0_33_655">
                <rect width="37" height="37" fill="white"/>
                </clipPath>
            </defs>
            </svg>

            <span class='info-card'>Good </span>
            <span class='title-card-info'>Inventory Status</span>
            <div class="link-pages-card-info">
                View Detailed Report  
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                <path d="M0.209396 1.22595L2.98702 4.00358L0.209396 6.78121C-0.0697987 7.0604 -0.0697987 7.51141 0.209396 7.7906C0.488591 8.0698 0.939597 8.0698 1.21879 7.7906L4.5047 4.5047C4.78389 4.2255 4.78389 3.7745 4.5047 3.4953L1.21879 0.209396C0.939597 -0.0697985 0.48859 -0.0697985 0.209396 0.209396C-0.0626402 0.488591 -0.069799 0.946756 0.209396 1.22595Z" fill="#1D242E"/>
                <path d="M4.2094 1.22595L6.98702 4.00358L4.2094 6.78121C3.9302 7.0604 3.9302 7.51141 4.2094 7.7906C4.48859 8.0698 4.9396 8.0698 5.21879 7.7906L8.5047 4.5047C8.78389 4.2255 8.78389 3.7745 8.5047 3.4953L5.21879 0.209396C4.9396 -0.0697985 4.48859 -0.0697985 4.2094 0.209396C3.93736 0.488591 3.9302 0.946756 4.2094 1.22595Z" fill="#1D242E"/>
                </svg>
            </div>
        
        </div>
        <div class="card-info">
        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" fill="none">
        <g clip-path="url(#clip0_33_718)">
            <path d="M29.2917 21.5833V9.25C29.2917 7.55417 27.9042 6.16667 26.2083 6.16667H4.625C2.92917 6.16667 1.54167 7.55417 1.54167 9.25V21.5833C1.54167 23.2792 2.92917 24.6667 4.625 24.6667H26.2083C27.9042 24.6667 29.2917 23.2792 29.2917 21.5833ZM26.2083 21.5833H4.625V9.25H26.2083V21.5833ZM15.4167 10.7917C12.8575 10.7917 10.7917 12.8575 10.7917 15.4167C10.7917 17.9758 12.8575 20.0417 15.4167 20.0417C17.9758 20.0417 20.0417 17.9758 20.0417 15.4167C20.0417 12.8575 17.9758 10.7917 15.4167 10.7917ZM35.4583 10.7917V27.75C35.4583 29.4458 34.0708 30.8333 32.375 30.8333H6.16667C6.16667 29.2917 6.16667 29.4458 6.16667 27.75H32.375V10.7917C34.0708 10.7917 33.9167 10.7917 35.4583 10.7917Z" fill="#FED600"/>
        </g>
        <defs>
            <clipPath id="clip0_33_718">
            <rect width="37" height="37" fill="white"/>
            </clipPath>
        </defs>
        </svg>

            <span class='info-card'>Rs. 8,55,875 </span>
            <span class='title-card-info'>Revenue : Jan 2022</span>
            <div class="link-pages-card-info">
                View Detailed Report  
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                <path d="M0.209396 1.22595L2.98702 4.00358L0.209396 6.78121C-0.0697987 7.0604 -0.0697987 7.51141 0.209396 7.7906C0.488591 8.0698 0.939597 8.0698 1.21879 7.7906L4.5047 4.5047C4.78389 4.2255 4.78389 3.7745 4.5047 3.4953L1.21879 0.209396C0.939597 -0.0697985 0.48859 -0.0697985 0.209396 0.209396C-0.0626402 0.488591 -0.069799 0.946756 0.209396 1.22595Z" fill="#1D242E"/>
                <path d="M4.2094 1.22595L6.98702 4.00358L4.2094 6.78121C3.9302 7.0604 3.9302 7.51141 4.2094 7.7906C4.48859 8.0698 4.9396 8.0698 5.21879 7.7906L8.5047 4.5047C8.78389 4.2255 8.78389 3.7745 8.5047 3.4953L5.21879 0.209396C4.9396 -0.0697985 4.48859 -0.0697985 4.2094 0.209396C3.93736 0.488591 3.9302 0.946756 4.2094 1.22595Z" fill="#1D242E"/>
                </svg>
            </div>
        </div>


        <div class="card-info">
        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" fill="none">
        <g clip-path="url(#clip0_33_744)">
            <path d="M30.8333 9.25H24.6667V6.16666C24.6667 4.47083 23.2792 3.08333 21.5833 3.08333H15.4167C13.7208 3.08333 12.3333 4.47083 12.3333 6.16666V9.25H6.16666C4.47083 9.25 3.08333 10.6375 3.08333 12.3333V30.8333C3.08333 32.5292 4.47083 33.9167 6.16666 33.9167H30.8333C32.5292 33.9167 33.9167 32.5292 33.9167 30.8333V12.3333C33.9167 10.6375 32.5292 9.25 30.8333 9.25ZM15.4167 6.16666H21.5833V9.25H15.4167V6.16666ZM30.8333 30.8333H6.16666V12.3333H30.8333V30.8333Z" fill="#03A9F5"/>
            <path d="M20.0417 15.4167H16.9583V20.0417H12.3333V23.125H16.9583V27.75H20.0417V23.125H24.6667V20.0417H20.0417V15.4167Z" fill="#03A9F5"/>
        </g>
        <defs>
            <clipPath id="clip0_33_744">
            <rect width="37" height="37" fill="white"/>
            </clipPath>
        </defs>
        </svg>

            <span class='info-card'>298 </span>
            <span class='title-card-info'>Medicines Available</span>
            <div class="link-pages-card-info">
                Visit Inventory
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                <path d="M0.209396 1.22595L2.98702 4.00358L0.209396 6.78121C-0.0697987 7.0604 -0.0697987 7.51141 0.209396 7.7906C0.488591 8.0698 0.939597 8.0698 1.21879 7.7906L4.5047 4.5047C4.78389 4.2255 4.78389 3.7745 4.5047 3.4953L1.21879 0.209396C0.939597 -0.0697985 0.48859 -0.0697985 0.209396 0.209396C-0.0626402 0.488591 -0.069799 0.946756 0.209396 1.22595Z" fill="#1D242E"/>
                <path d="M4.2094 1.22595L6.98702 4.00358L4.2094 6.78121C3.9302 7.0604 3.9302 7.51141 4.2094 7.7906C4.48859 8.0698 4.9396 8.0698 5.21879 7.7906L8.5047 4.5047C8.78389 4.2255 8.78389 3.7745 8.5047 3.4953L5.21879 0.209396C4.9396 -0.0697985 4.48859 -0.0697985 4.2094 0.209396C3.93736 0.488591 3.9302 0.946756 4.2094 1.22595Z" fill="#1D242E"/>
                </svg>
            </div>
        </div>


        <div class="card-info">
        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" fill="none">
        <path d="M18.5 9.23458L30.1087 29.2917H6.89124L18.5 9.23458ZM18.5 3.08333L1.54166 32.375H35.4583L18.5 3.08333ZM20.0417 24.6667H16.9583V27.75H20.0417V24.6667ZM20.0417 15.4167H16.9583V21.5833H20.0417V15.4167Z" fill="#F0483E"/>
        </svg>

            <span class='info-card'>01 </span>
            <span class='title-card-info'>Medicine Shortage</span>
            <div class="link-pages-card-info">
                Resolve Now
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                <path d="M0.209396 1.22595L2.98702 4.00358L0.209396 6.78121C-0.0697987 7.0604 -0.0697987 7.51141 0.209396 7.7906C0.488591 8.0698 0.939597 8.0698 1.21879 7.7906L4.5047 4.5047C4.78389 4.2255 4.78389 3.7745 4.5047 3.4953L1.21879 0.209396C0.939597 -0.0697985 0.48859 -0.0697985 0.209396 0.209396C-0.0626402 0.488591 -0.069799 0.946756 0.209396 1.22595Z" fill="#1D242E"/>
                <path d="M4.2094 1.22595L6.98702 4.00358L4.2094 6.78121C3.9302 7.0604 3.9302 7.51141 4.2094 7.7906C4.48859 8.0698 4.9396 8.0698 5.21879 7.7906L8.5047 4.5047C8.78389 4.2255 8.78389 3.7745 8.5047 3.4953L5.21879 0.209396C4.9396 -0.0697985 4.48859 -0.0697985 4.2094 0.209396C3.93736 0.488591 3.9302 0.946756 4.2094 1.22595Z" fill="#1D242E"/>
                </svg>
            </div>
        </div>
    </div>
</main>

@extends('layouts.footer')
