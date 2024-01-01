@extends('layouts.main-layout')
@php
    $active_page = "services";
@endphp

@section('title', 'Our Services')

@section('content')
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css"
    />
    @include('Partials.main-navigation')
    <div
        class="w-[100%] mb-[40px] h-[260px] bg-[url(https://wellpointeducation.com/wp-content/uploads/2022/03/page-header.jpg)]">
        <div class="w-[100%] h-[100%] flex flex-col justify-center" style="background-color: rgba(0,0,0,0.8)">
            <div class="container max-w-[1000px] mx-[auto] text-white">
                <h1 class="!text-[2em] mb-[10px] min-w font-semibold">Study in Canada</h1>
                <ul class="flex space-x-2">
                    <li class="hover:text-orange-500"><a href="/">Home</a></li>
                    <li><i class="bi bi-chevron-right text-white text-[12px]"></i></li>
                    <li>Study in the Canada</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container pt-[20px] mb-[50px] max-w-[1000px]">
        <div class="flex flex-col md:flex-row md:space-x-[20px] mb-[20px]">
            <div class="md:w-2/3">
                <h1>STUDY IN CANADA</h1>
                <P>Canada is a popular destination for thousands of international students because of its world-class
                    cities, vast wilderness and a culture of tolerance and diversity. It is ranked as the “best place to
                    live” and the “best place to study” several times and is renowned for working, visiting and
                    investing. It offers excellent campus life and on-campus as well as off-campus job
                    opportunities.</P>
                <P>According to QS World Ranking, four of the top 100 universities in the world are from Canada. The
                    average tuition cost in Canada is less than that in other countries like the US. Canada has a
                    hassle-free visa application process for students.</P>
                <P>One of the reasons for its popularity is affordable education. Though the standard of living is high
                    in Canada, the cost of living and tuition fees are usually lower as compared to other study abroad
                    destinations. Apart from that, the highly dynamic and practical based academic environment helps
                    students acquire analytical and communicative skills along with the ability to express themselves,
                    demonstrate their creativity and develop their confidence.</P>
            </div>
            <div class="md:w-1/3">
                <img class="img-fluid" src="/storage/canada.jpg" alt="" style="border-radius:10px;margin-top: 70px">
            </div>
        </div>
        <P>Canada is an international leader in computer and information technologies and has a reputation for
            excellence in such sectors as telecommunications, animation, transportation and engineering; and
            specifically, aerospace, urban transport, microelectronics, medical devices, advanced software,
            hydroelectric and nuclear power, lasers and opt-electronics, biotechnology etc. Canada was among the first
            in the world to recognize the need to connect schools and libraries to the Internet, and its School Net
            program is being copied around the world.</P>
        <P>It is mainly the continuously mounting inquisitiveness and keenness of the students to study in Canada, study
            in a practice oriented research based education system instead of studying in a traditionally designed
            theoretical and project-based education system that has led to the development and growth of overseas
            education as never before, in contemporary times. Another reason that can be attributed to the increasing
            popularity of overseas education is the fact that the employers across industries prefer hiring candidates
            possessing international qualification from top universities or colleges across the globe.</P>
        <P>Among all prime international education destinations, it is Canada that holds the topmost position. Canada is
            recognized asthe safest international education destination in the world offering high-quality of life and
            education. Now, acknowledging the popularity of study in Canada as a preferred international study
            destination, let us find out in below paragraphs as what makes Canada, the No. 1 international education
            destination.</P>

        <h1>BENEFITS OF STUDYING IN CANADA</h1>
        <h3>DIVERSIFIED PROGRAMS</h3>
        <p>
            The educational institute in Canada offers a wide variety of programs to international students to choose
            from. Students from across the globe come to Canada for higher education prospects and Canadian universities
            offer more than 10,000 undergraduate and graduate degree programs, as well as professional degree programs
            and certificate courses. Students can also choose to pursue various programs like degrees, diplomas,
            certificate programs, short courses, and so on across industries including; telecommunications, agriculture,
            computer technology, medicine,business studies, and environmental science agriculture, fisheries,
            paramedical technology and so on.
        </p>
        <h3>AFFORDABILITY</h3>
        <p>
            Comparing the fee structure of the institutes across industries in prime international education
            destinations indicates that Canada is the most affordable of all including; US, UK, New Zealand, Australia
            and so on.
        </p>
        <h3>AFFORDABILITY</h3>
        <p>
            Acknowledging the passion among the Indian students to excel, the Canadian universities and colleges
            enthusiastically welcome and admit Indian students to their academic programs. Also, Canadian Government
            admits that international students bring fresh innovative ideas to Canada, thus, contributing a great deal
            to wide range of disciplines and the industry with the knowledge and understanding that they carry with
            themselves while moving to Canada. Canadian Government also offers various scholarship and financial
            assistance schemes to the most deserving international students.
        </p>
        <h3>SCHOLARSHIP OR FINANCIAL ASSISTANCE IN STUDY IN CANADA</h3>
        <p>
            On successful completion of the studies in Canada the students will get the chance to enhance their career
            prospects as they will become the preferred choice of the employers across industries. Moreover, possessing
            an international exposure will prepare them for a rewarding career ahead. Also, it will enhance their
            chances to settle down in the country permanently, after gaining an experience of one year.
        </p>
        <P class="mb-[20px]">
            The US is not just an economically and technologically happening place; it is also one of the most vibrant
            societies of modern times. American culture is an amalgamation of cultures from across the globe. Though the
            initial influence in the evolution of American culture was overwhelmingly English, Scottish and Irish, today
            the wider American culture has taken a unique liberal form centered on egalitarianism, liberty and respect
            for individualism. One can find people from all the religions, ethnicity and speakers of different first
            languages in USA. Though English is the lingua franca in the entire country, Spanish language is fast
            emerging as the major second language, with official language status in commonwealth of Puerto Rico and the
            state of New Mexico. Indian immigrants, in general, blend well with the American society, given our prior
            knowledge of the English language and prior exposure to American culture through movies and television.
            Further, major American cities have a considerable number of Indian and South Asian population which enable
            Indian students to feel at home. It is not very difficult to find Indian groceries or restaurants in places
            such as New York, San Francisco, Washington DC, Chicago, Los Angeles, Boston, Philadelphia or Austin.
            However students studying at rural campuses, say in Iowa or Nebraska, might have to explore a bit.
        </P>

        <ul class="flex flex-wrap md:!flex-nowrap md:space-x-2 mb-[20px]">
            @foreach([1,2,3,4] as $item)
                <li class="h-[300px] w-[100%] p-[10px] mb-[10px] rounded-tl-[50px] rounded-br-[50px] border-4 border-orange-500">
                    <div class="w-[100px] h-[100px] bg-red-900 mx-auto mb-[10px]">

                    </div>
                    <h6 class="font-semibold text-center text-red-800  mb-[10px]">Funding</h6>
                    <p class="text-sm">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi dicta, dolor eius illum
                        inventore nam nemo o
                    </p>
                </li>
            @endforeach
        </ul>

        <div>
            <ul class="flex space-x-2">
                @foreach([1,2,3] as $item1)
                    <li>
                        <button class="rounded-sm py-[3px] px-[5px] bg-blue-400 text-white">Button{{$item1}}</button>
                    </li>
                @endforeach
            </ul>
            <ul class="w-[100%] h-[300px] p-[10px] border border-1">
                <li>Intake</li>
            </ul>
        </div>
    </div>
    <style>
        h1, h3 {
            padding: 10px 0;
        }

        p {
            color: grey;
            padding: 10px 0;
        }
    </style>

    @include('Partials.footer')
@endsection
