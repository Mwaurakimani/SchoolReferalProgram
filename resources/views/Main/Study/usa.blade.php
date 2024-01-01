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
                <h1 class="!text-[2em] mb-[10px] min-w font-semibold">Study in USA</h1>
                <ul class="flex space-x-2">
                    <li class="hover:text-orange-500"><a href="/">Home</a></li>
                    <li><i class="bi bi-chevron-right text-white text-[12px]"></i></li>
                    <li>Study in the USA</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container pt-[20px] mb-[50px] max-w-[1000px]">
        <div class="flex justify-center flex-col md:flex-row md:items-center md:space-x-[20px]">
            <div class="mb-[20px] md:w-2/3">
                <h1>STUDY IN USA</h1>
                <P>
                    If there was a country post world wars, where aspirations met opportunities in all forms, it has to be the
                    United States of America popularly known as the USA. Founded by immigrants from Western Europe in the 15th
                    century, the country has witnessed an avalanche of immigration of people, culture, values and most
                    importantly ideas from all over the world in the last few centuries, and has made the country a boiling pot
                    of innovation in science, technology, business and education. America has offered opportunity to everyone
                    with a dream and willingness to struggle to achieve whatever they want: be it the case of India’s IndraNooyi
                    becoming the CEO of Pepsi Co. or Obama, the son of a Kenyan immigrant becoming the president of the most
                    powerful country in the world.
                </P>
                <P>
                    A federal republic constituting of 50 states, USA today stands tall in the world as a harbinger of democracy
                    and a symbol of meritocracy in every sphere of life including nurturing of world class institutions
                    providing learning opportunities to hundreds of thousands of international students. In terms of number, USA
                    is the undisputed top destination for students interested in studying abroad.
                </P>
            </div>
            <div class="md:w-1/3">
                <img class="img-fluid rounded-lg" src="/storage/usa.jpg">
            </div>
        </div>

        <h1 class="text-center mb-[20px]">LIFE AND CULTURE IN THE USA</h1>
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
        }
    </style>

    @include('Partials.footer')
@endsection
