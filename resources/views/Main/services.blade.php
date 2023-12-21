@extends('layouts.main-layout')

@section('title', 'Our Services')

@section('content')
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css"
    />
    @include('Partials.main-navigation')
    <div class="w-[100%] mb-[40px] h-[260px] bg-[url(https://wellpointeducation.com/wp-content/uploads/2022/03/page-header.jpg)]">
        <div class="w-[100%] h-[100%] flex flex-col justify-center" style="background-color: rgba(0,0,0,0.8)">
            <div class="container max-w-[1000px] mx-[auto] text-white">
                <h1 class="!text-[2em] mb-[10px] min-w font-semibold">Our Services</h1>
                <ul class="flex space-x-2">
                    <li class="hover:text-orange-500"><a href="/">Home</a></li>
                    <li><i class="bi bi-chevron-right text-white text-[12px]"></i></li>
                    <li>Our Services</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="flex container mb-[150px] max-w-[1000px] space-x-2 flex-col md:flex-row">
        <div class="w-full px-[10px] md:w-1/2">
            <h2 class="!text-[30px] font-semibold text-pink-800 mb-[15px]">University Admission Application</h2>
            <p class="text-[16px] text-gray-500 mb-[15px]">
                Our expert staff will work closely with you to complete and fast-track your admission application. There are four stages to the admission application process: application, assessment, offer, and acceptance. We will guide you through this process from start to finish.
                Studying abroad will provide you with immense opportunities and we choose to partner with the best higher learning institutions in the country to ensure this.
                If you’d like to learn more about the application process or speak to us about the study opportunities in Australia, contact us now.
            </p>
            <button class="text-[16px] mb-[10px] py-[6px] px-[5px] border border-orange-500 bg-orange-400 rounded text-white hover:bg-orange-700">SPEAK TO AN EXPERT</button>
        </div>
        <div class="h-[300px] flex items-center justify-center w-full md:w-1/2">
            <div class="image-display w-[90%] h-[300px] bg-blue-300">

            </div>
        </div>
    </div>

    <div class="flex container mb-[150px] max-w-[1000px] space-x-2 flex-col md:flex-row">
        <div class="h-[300px] flex items-center justify-center w-full md:w-1/2">
            <div class="image-display w-[90%] h-[300px] bg-blue-300">

            </div>
        </div>
        <div class="w-full px-[10px] md:w-1/2">
            <h2 class="!text-[30px] font-semibold text-pink-800 mb-[15px]">Course Counselling Service</h2>
            <p class="text-[16px] text-gray-500 mb-[15px]">
                Choosing the right course can be overwhelming, but our team will make sure you have the best options at your disposal. As an education agency, we focus on each individual student, so that you get the best from your education.
                We pride ourselves on our thoughtful, handcrafted approach to course counselling. Unlike larger education agencies, our expert staff will take the time to discuss the best options for your individual study goals.
                We work closely with Australian higher learning institutions. We can provide answers and expert advice to your many questions. After consultation, we can handcraft the best option for you.
                Contact us to find out how our counsellors can help direct you towards the best opportunities.
            </p>
            <button class="text-[16px] mb-[10px] py-[6px] px-[5px] border border-orange-500 bg-orange-400 rounded text-white hover:bg-orange-700">SPEAK TO AN EXPERT</button>
        </div>
    </div>

    <div class=" mb-[150px] bg-[url(https://wellpointeducation.com/wp-content/uploads/2022/03/graduation-bg.jpg)]">
        <div class="w-full py-[20px]" style="background-color: rgba(31,97,173,.85)" >
            <div class="flex container max-w-[1000px] space-x-2 flex-col md:flex-row">
                <div class="w-full px-[10px] md:w-1/2">
                    <h2 class="!text-[30px] font-semibold text-orange-500 mb-[15px]">University Admission Application</h2>

                    <p class="text-[16px] text-white mb-[15px]">Student Visa Application, Renewal, and Extension Services An international student is required to have a valid student visa at all time while abroad.</p>
                    <p class="text-[16px] text-white mb-[15px]">Often times, students’ visas expire prior to a student completing their studies.</p>
                    <p class="text-[16px] text-white mb-[15px]">Wellpoint Education Agency will assist a student to extend or in other cases renew the visa.</p>
                    <p class="text-[16px] text-white mb-[15px]">It is highly recommended that a student consults with us due cases whereby an extended confirmation of enrolment is required or in cases where there has been changes in courses or education institution during the duration of study.</p>

                    <button class="text-[16px] mb-[10px] py-[6px] px-[5px] bg-orange-400 rounded text-white hover:bg-orange-700">SPEAK TO AN EXPERT</button>
                </div>
                <div class="h-full flex items-center justify-center w-full md:w-1/2">
                    <div class="image-display w-3/4 ratio ratio-1x1 bg-blue-300 rounded-[50%] border-orange-50 border-[8px]">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex container mb-[150px] max-w-[1000px] space-x-2 flex-col md:flex-row">
        <div class="h-[300px] flex items-center justify-center w-full md:w-1/2">
            <div class="image-display w-[90%] h-[300px] bg-blue-300">

            </div>
        </div>
        <div class="w-full px-[10px] md:w-1/2">
            <h2 class="!text-[30px] font-semibold text-pink-800 mb-[15px]">Airport Arrivals and Pickups</h2>

            <p class="text-[16px] text-gray-500 mb-[15px]">Arriving in a new country can be daunting but our professional team, will make you feel right at home. As a boutique agency, we pride ourselves on the individual care we provide every student.</p>
            <p class="text-[16px] text-gray-500 mb-[15px]">We will pick you up upon arrival at your destination airport.</p>
            <p class="text-[16px] text-gray-500 mb-[15px]">We understand the transition to a new country can be difficult and we want to make it as easy as possible for you.</p>
            <p class="text-[16px] text-gray-500 mb-[15px]">Join us so you can receive continued support long after arrival.</p>

            <button class="text-[16px] mb-[10px] py-[6px] px-[5px] border border-orange-500 bg-orange-400 rounded text-white hover:bg-orange-700">SPEAK TO AN EXPERT</button>
        </div>
    </div>

    <div class="mb-[150px] bg-[url(https://wellpointeducation.com/wp-content/uploads/2022/03/graduation-bg.jpg)]">
        <div class="w-full py-[20px]" style="background-color: rgba(0,155,94,.92)" >
            <div class="flex container max-w-[1000px] space-x-2 flex-col md:flex-row">
                <div class="w-full px-[10px] md:w-1/2">
                    <h2 class="!text-[30px] font-semibold text-orange-500 mb-[15px]">Predeparture Counselling</h2>

                    <p class="text-[16px] text-white mb-[15px]">Predeparture Counselling
                        We will provide you with all the information you need before for studies abroad. This includes information on mobile phone and internet providers, banking services, student accommodation and employment opportunities.</p>
                    <p class="text-[16px] text-white mb-[15px]">Our team is available to both students and families. We understand that this is often an apprehensive time for every student’s family. We will ease this burden by providing advice, care and the essential information to all involved.</p>
                    <p class="text-[16px] text-white mb-[15px]">Operating since 2022, we have first-hand experience in helping students and their respective families prepare for the transition. With offices in both Kenya and abroad, we can offer counselling to both on and off-shore students.</p>
                    <p class="text-[16px] text-white mb-[15px]">Join us to receive information and expert advice on living and studying abroad.</p>

                    <button class="text-[16px] mb-[10px] py-[6px] px-[5px] bg-orange-400 rounded text-white hover:bg-orange-700">SPEAK TO AN EXPERT</button>
                </div>
                <div class="h-full flex items-center justify-center w-full md:w-1/2">
                    <div class="image-display w-3/4 ratio ratio-1x1 bg-blue-300 rounded-[50%] border-orange-50 border-[8px]">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex container mb-[150px] max-w-[1000px] space-x-2 flex-col md:flex-row">
        <div class="h-[300px] flex items-center justify-center w-full md:w-1/2">
            <div class="image-display w-[90%] h-[300px] bg-blue-300">

            </div>
        </div>
        <div class="w-full px-[10px] md:w-1/2">
            <h2 class="!text-[30px] font-semibold text-pink-800 mb-[15px]">Airport Arrivals and Pickups</h2>

            <p class="text-[16px] text-gray-500 mb-[15px]">Arriving in a new country can be daunting but our professional team, will make you feel right at home. As a boutique agency, we pride ourselves on the individual care we provide every student.</p>
            <p class="text-[16px] text-gray-500 mb-[15px]">We will pick you up upon arrival at your destination airport.</p>
            <p class="text-[16px] text-gray-500 mb-[15px]">We understand the transition to a new country can be difficult and we want to make it as easy as possible for you.</p>
            <p class="text-[16px] text-gray-500 mb-[15px]">Join us so you can receive continued support long after arrival.</p>

            <button class="text-[16px] mb-[10px] py-[6px] px-[5px] border border-orange-500 bg-orange-400 rounded text-white hover:bg-orange-700">SPEAK TO AN EXPERT</button>
        </div>
    </div>

    <div class="mb-[150px] bg-orange-500">
        <div class="w-full pt-[20px]">
            <div class="flex container max-w-[1000px] space-x-2 flex-col md:flex-row">
                <div class="w-full px-[10px] md:w-1/2">
                    <h2 class="!text-[30px] text-white mb-[15px]">Let‘s Get You Started</h2>

                    <p class="text-[16px] text-white mb-[15px]">The journey to a potentially great and successful experience studying for your dream course abroad starts here.</p>
                    <p class="text-[16px] text-white mb-[15px]">We offer you a full range of professional services to enable you to study in leading universities and colleges in Australia, Canada, the UK, and Asia.</p>
                    <p class="text-[16px] text-white mb-[15px]">Our expert team at Wellpoint will guide you through all processes and requirements to get you started.</p>

                    <button class="text-[16px] mb-[10px] py-[6px] px-[5px] bg-white rounded text-orange-400 font-bold hover:bg-orange-700">SPEAK TO AN EXPERT</button>
                </div>
                <div class="h-full flex items-end justify-center w-full md:w-1/2">
                    <div class="image-display h-full w-full">
                        <img loading="lazy" decoding="async" width="800" height="827" src="https://wellpointeducation.com/wp-content/uploads/2022/03/graduands.png" alt="" title="graduands" srcset="https://wellpointeducation.com/wp-content/uploads/2022/03/graduands.png 800w, https://wellpointeducation.com/wp-content/uploads/2022/03/graduands-480x496.png 480w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 800px, 100vw" class="wp-image-146">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('Partials.footer')
@endsection
