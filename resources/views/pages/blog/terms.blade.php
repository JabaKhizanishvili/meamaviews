@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('css')
{{--@vite(['node_modules/glightbox/dist/css/glightbox.css', 'node_modules/swiper/swiper-bundle.min.css'])--}}
@vite(['node_modules/swiper/swiper-bundle.min.css'])
@endsection

@section('content')

<main>

    <!-- =======================
        Blog detail START -->
    <section class="position-relative overflow-hidden pt-xl-8">
        <!-- Blur decoration START -->
        <div class="position-absolute start-0 top-0">
            <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-1 blur-9 h-300px rotate-335"
                alt="Grad shape">
        </div>

        <div class="position-absolute end-0 top-0">
            <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-1 blur-8 h-300px rotate-335"
                alt="Grad shape">
        </div>
        <!-- Blur decoration END -->

        <div class="container position-relative pt-4 pt-sm-5">
            <div class="row">
                <!-- Title -->
                <div class="col-lg-8 mx-auto text-center mb-4 mb-sm-6">
{{--                    <a href="#" class="badge text-bg-dark mb-4">Lifestyle</a>--}}
                    <h1 class="h2 mb-0">წესები და პირობები</h1>
                </div>

                <!-- Image -->




                <!-- List content -->
                <div class="col-lg-10 mx-auto mb-4 mb-sm-6">
{{--                    <h6>Step 1: Shifting Perspective: From Lack to Abundance</h6>--}}
                    <p class="mb-5">

                        წინამდებარე ვებ-გვერდის გამოყენება რეგულირდება შპს „კოსი -კონცეფთ ოფ სეიფთი" (საიდენტიფიკაციო ნომერი: 405351239, მისამართი: თბილისი, სიმონ ჩიქოვანის ქუჩა #34) მიერ დადგენილი წესებითა და პირობებით. გთხოვთ, ყურადღებით გაეცნოთ წინამდებარე წესებსა და პირობებს, რომელიც არეგულირებს თქვენ მიერ ვებ-გვერდის გამოყენების პირობებს. იმ შემთხვევაში, თუ არ ეთანხმებით წინამდებარე წესებსა და პირობებს, გთხოვთ, დატოვოთ „კოსი -კონცეფთ ოფ სეიფთი"-ს  ვებ-გვერდი. ვებ-გვერდზე სტუმრობით, ან მასზე გამოქვეყნებული ინფორმაციის გამოყენებით, ადასტურებთ და სრულად ეთანხმებით მითითებულ ყველა წესს, რომელიც შესაძლოა ცალმხრივად შეიცვალოს შპს „კოსი -კონცეფთ ოფ სეიფთი" -ს მიერ გარკვეული პერიოდულობით, რაც დაფიქსირდება მოცემულ ვებ-გვერდზე და მასზე თქვენი სტუმრობა ნიშნავს  შესაბამის პირობებზე დათანხმებას. კოსის ვებ-გვერდზე მითითებული ინფორმაცია, უმეტეს შემთხვევაში, განკუთვნილია იმ პირებისთვის, რომლებიც დაინტერესებულნი არიან ორგანიზაციებში შრომის უსაფრთხოების და ჯანმრთელობის სტანდარტების დანერგვით. კოსის  ვებ-გვერდზე მითითებული გარკვეული ინფორმაციის გასაანალიზებლად, შესაძლოა დაგჭირდეთ შესაბამისი სფეროს სპეციალისტის კონსულტაცია.  „კოსი -კონცეფთ ოფ სეიფთი"-ს ვებ-გვერდზე მითითებული კონკრეტული მომსახურება რეგულირდება სპეციალური ხელშეკრულებით. პასუხისმგებლობის შეზღუდვა „კოსი -კონცეფთ ოფ სეიფთი" და მისი შესაბამისი თანამშრომლები არ არიან პასუხისმგებელნი დამდგარი შედეგისათვის, რომელიც მოიცავს პირდაპირ, არაპირდაპირ, სპეციალურ, შემთხვევით, მიზეზ-შედეგობრივ, არასახელშეკრულებო ზიანს, რაც გამოწვეულია ვებ-გვერდზე მითითებული ინფორმაციის გამოყენებით. კომპანია არ აგებს პასუხს ვებ-გვერდის გამოყენებით გამოწვეულ რაიმე სახის ზიანზე, დანაკარგზე, თუნდაც  ტექნიკური შეფერხების, დეფექტის, ოპერაციის გაუქმება/შეჩერების, კომპიუტერული ვირუსის, ან სისტემის გაუმართაობის შემთხვევაში.   ვებ-გვერდზე წარმოდგენილი შინაარსის ხელმისაწვდომობა შესაძლოა დამოკიდებული იყოს საძიებო სისტემის ფუნქციებსა და შეზღუდვებზე. „კოსი -კონცეფთ ოფ სეიფთი"  არ იღებს პასუხისმგებლობას იმ შემთხვევებზე, თუ ვებ-გვერდის შემადგენელი გარკვეული კომპონენტები არაა ხელმისაწვდომი თქვენთვის. ვებ-გვერდის გამოყენება ვებ-გვერდზე მითითებული ინფორმაცია განკუთვნილია მხოლოდ მომხმარებლების პირადი გამოყენებისთვის. თქვენ ვალდებული ხართ, ვებ-გვერდზე განთავსებული ინფორმაცია, ასევე ვებ-გვერდის სტრუქტურა, გამოსახულება და დიაზინი არ გაავრცელოთ, არ გადასცეთ, არ მოახდინოთ მისი ასლების დამზადება ან/და რეპროდუცირება (მათ შორის სოციალურ მედიაში) კომერციული მიზნებისთვის, „კოსი -კონცეფთ ოფ სეიფთი"  ს  წინასწარი წერილობითი თანხმობის გარეშე, რაც ჩვენს ერთპიროვნულ დისკრეციას წარმოადგენს. კომპანიაში წინასწარი წერილობითი თანხმობა არ არის საჭირო, თუ ვებ-გვერდზე მითითებული ინფორმაციის/შინაარსის გამოყენება ხდება კომპანიის წინასწარ განცხადებული თანხმობის შესაბამისად, ან ასეთი ინფორმაცია გამოიყენება პირადი მოხმარებისთვის, საგანმანათლებლო ან ინფორმაციული მიზნებისთვის. ვებ-გვერდისა და სისტემის არაავტორიზებული გამოყენება (მათ შორის არარსებული დასახელებით და კოდით) სასტიკად აკრძალულია. იქ სადაც მოითხოვება რეგისტრაცია და პაროლის გამოყენება, თქვენ ვალდებული ხართ, კონფიდენციალურად შეინახოთ და არ დაუშვათ მესამე პირის მიერ ვებ-გვერდზე წვდომის შესაძლებლობა თქვენ მაგივრად. შესაძლებელია, რომ ვებ-გვერდის რომელიმე კონკრეტული გვერდი შეიცავდეს წინამდებარე წესებისაგან და პირობებისაგან განსხვავებულ დანაწესებს. მათ შორის კოლიზიის არსებობის შემთხვევაში, უპირატესობა ენიჭება წინამდებარე დანაწესებს. „კოსი -კონცეფთ ოფ სეიფთი" ს  ვებ-გვერდის (მათ შორის ფორუმების) გამოყენებისას, აკრძალული გაქვთ უკანონო/თაღლითური ქმედება, ცილისმწამებლური, სიძულვილის ენით საუბარი ან სხვა არასასურველი ინფორმაციის განთავსება, გავრცელება/ტრანსმისია, რაც შესაძლოა არღვევდეს მოქმედ კანონმდებლობას და რეგულაციას, ან ზიანს აყენებდეს კომპანიის საქმიან რეპუტაციას. ასევე გეკრძალებათ ვებ-გვერდისთვის ზიანის მიყენება ნებისმიერი სახის მავნე პროგრამის მეშვეობით „ლოგიკური ბომბი" ან სხვა მსგავსი ქმედებების განხორციელება). თქვენს ერთპიროვნულ რისკს წარმოადგენს ვებ-გვერდზე მოსახვედრად გამოყენებული ნებისმიერი პროგრამული მოდულის (სატელეფონო, კომპიუტერული და სხვა) გაუმართავობა. იმ შემთხვევაში, თუ ვებ-გვერდზე წვდომა შეუძლებელი გახდება კომპანიის ტექნიკური შეფერხების, ან „კოსი -კონცეფთ ოფ სეიფთი" ს დამოუკიდებელი სხვა ნებისმიერი მიზეზით, კომპანია არ არის პასუხისმგებელი დამდგარ შედეგზე.  ინტელექტუალური საკუთრება ვებ-გვერდზე, მის შინაარსზე, სტრუქტურასა და დიზაინზე სრულად ვრცელდება შპს „კოსი -კონცეფთ ოფ სეიფთის"  საავტორო უფლება.  შპს „კოსი -კონცეფთ ოფ სეიფთის" ექსკლუზიური უფლებები ვრცელდება ასევე კომპანიის მიერ შექმნილ და რეგისტრირებულ ინტელექტუალური საკუთრების ნებისმიერ ობიექტზე, მათ შორის მის კუთვნილ სასაქონლო ნიშნებზე. „კოსი -კონცეფთ ოფ სეიფთის"  საავტორო (©) და სხვა ინტელექტუალური საკუთრების უფლებები ვრცელდება წინამდებარე ვებ-გვერდსა და მასზე არსებულ მთელ შინაარსზე (პროდუქტებისა და მომსახურების ჩათვლით). აკრძალულია წინამდებარე ვებ-გვერდზე მითითებული ნებისმიერი ინფორმაციის/შინაარსის, მათ შორის ლოგო, პიქტოგრამა, გრაფიკა, სურათი, გამოსახულება, პატენტი, მომსახურების/სასაქონლო ნიშნები, დიზაინი,  ბანკის მიერ შექმნილი ვიზუალური მედია და სხვა ინტელექტუალური საკუთრების (რეგისტრირებული, ან არარეგისტრირებული) უნებართვო გამოყენება, დამუშავება და გამოქვეყნება (მათ შორის სოციალურ მედიაში)  კომპანიაში წინასწარი წერილობითი თანხმობის გარეშე. კომპანიის თანხმობა არ არის საჭირო, თუ წინამდებარე მონაცემების გამოყენება ხორციელდება არაკომერციული, პირადი მიზნებისთვის და იმ შემთხვევებში, როცა წინასწარ თანხმობას არ ითვალიწინებს საქართველოს კანონმდებლობა, ან შესაბამისი საერთაშორისო რეგულაცია. ინტელექტუალური საკუთრების ვებ-გვერდზე მითითება არ ნიშნავს  მომხმარებლისათვის მის გამოყენებაზე ლიცენზიის მინიჭებას. ვებ-გვერდიდან მომხმარებლის მიერ ნებისმიერი ინფორმაციის კომერციული მიზნებისთვის გადმოწერა, ან ასლის დამზადება ჩაითვლება საქართველოს კანონმდებლობის დარღვევად.წესებსა და პირობებში მითითებული არცერთი დანაწესი არ განიჭებთ უფლებას, ან ლიცენზიას წინამდებარე მუხლში ჩამოთვლილი კომპანიის ინტელექტუალური საკუთრების გამოყენებაზე. იმ შემთხვევაში, თუ „კოსი -კონცეფთ ოფ სეიფთი"  რომელიმე ვებ-გვერდი მომხმარებლებს ანიჭებს ჩატის, ინტერაქციისა, თუ დიალოგის/დისკუსიის გამართვის შესაძლებლობას, ვალდებულნი ხართ, წინამდებარე არხებში დააფიქსიროთ მხოლოდ ის ინფორმაცია, რომელზეც ფლობთ ინტელექტუალურ საკუთრებას, ან გაქვთ შესაბამისი პირის თანხმობა. ამასთან ერთად, კომპანიას ანიჭებთ უფლებას დაამუშაოს (მათ შორის, გამოაქვეყნოს) თქვენ მიერ დაფიქსირებული ინფორმაცია კანონიერი, საკომუნიკაციო/საინფორმაციო (მათ შორის, საგამოფენოდ, კონკურსში მონაწილეობისათვის) მიზნებისათვის. „კოსი -კონცეფთ ოფ სეიფთის"  ვებ-გვერდზე მითითებული კომპანიების სახელები, სასაქონლო ნიშნები, ლოგოები ეკუთვნის შესაბამის პირებს.

                        კონფიდენციალურობის დაცვა

                        შპს „კოსი -კონცეფთ ოფ სეიფთი" უზრუნველყოფს მისთვის მიწოდებულ კონფიდენციალური ინფორმაციის მაქსიმალურ დაცულობას კანონმდებლობით დადგენილი წესით. კომპანია მომხმარებლის პერსონალურ ინფორმაციას ითხოვს საჭიროებიდან გამომდინარე, იმ მოცულობით, რაც საჭიროა ეფექტური მომსახურების  გასაწევად საქართველოს კანონმდებლობით დადგენილი წესით. მომხმარებელს ნებისმიერ დროს შეუძლია მოითხოვოს ინფორმაცია კომპანიამ მისი პერსონალური ინფორმაციის დამუშავების თაობაზე.კომპანიის მხრიდან კონფიდენციალური ინფორმაციის გადაცემა ხორციელდება თქვენი წინასწარი თანხმობით, ან კანონით გათვალისწინებულ სხვა შემთხვევებში. „კოსი -კონცეფთ ოფ სეიფთი"  მაქსიმალურად ზრუნავს თქვენი პირადი კონფიდენციალური ინფორმაციის უსაფრთხოებასა და გაუმჟღავნებლობაზე, მაგრამ იმ ფაქტის გათვალისწინებით, რომ თქვენი მონაცემების დისტანციურად მოწოდების პროცესი არ არის დაშიფრული, კომპანია იხსნის პასუხისმგებლობას მესამე პირების მიერ თქვენი მონაცემების არასანქცირებულ წვდომაზე ამ მონაცემების კომპანიისთვის მიწოდების დროს. „კოსი -კონცეფთ ოფ სეიფთი"  მაქსიმალურად ზრუნავს თქვენი პირადი ინფორმაციის უსაფრთხოებასა და კონფიდენციალურობაზე, თუმცა იხსნის პასუხისმგებლობას მესამე პირების მიერ აღნიშნული ინფორმაციის არასანქცირებულ წვდომაზე ამ მონაცემების კომპანიისთვის მიწოდების დროს (მათ შორის დისტანციური მიწოდებისას გამოყენებულ პლატფორმებზე) კონფიდენციალური ინფორმაციის კომპანიისთვის მიწოდების დროს, მომხმარებელი ვალდებულია, არ მოახდინოს ისეთი ავტომატური საშუალებების გამოყენება, რამაც შესაძლოა საფრთხე შეუქმნას კომპანიას უსაფრთხოებასა და დაცულობას. ვებ-გვერდის სტუმრობისას, თქვენ მიერ დატოვებული ნებისმიერი „ელექტრონული ნაკვალევი", შესაძლოა გამოყენებულ იქნას კომპანიისთვის დამახასიათებელი ტექნიკური ოპერაციების განსახორციელებლად, სტატისტიკის საწარმოებლად, ან საიტის ხარისხის გასაუმჯობესებლად. „კოსი -კონცეფთ ოფ სეიფთის"  მიერ ადმინისტრაციული ფუნქციების ეფექტურად შესასრულებლად, შესაძლოა თქვენ მიერ გამოგზავნილ იქნას პერსონალური მონაცემები კომპანიის ელექტრონულ ფოსტაზე. გაცნობებთ, რომ „კოსი -კონცეფთ ოფ სეიფთი"  არ არის პასუხისმგებელი, გადაცემის პროცესში, მესამე პირის არასანქცირებული ჩარევის შედეგად, აღნიშნული ინფორმაციის უკანონო მოპოვებაზე, ან იმ ინფორმაციაზე, რომელიც მომხმარებელმა თავადვე გახადა საჯარო, ან გაავრცელა ნაკლებად უსაფრთხო ელექტრონული საშუალებებით. წინამდებარე წესებსა და პირობებზე დათანხმებით, მომხმარებელი ადასტურებს, მასთან გაფორმებული ხელშეკრულების ფარგლებში, კომპანიისთის მინიჭებულ უფლებას, გაუგზავნოს მომხმარებელს შეტყობინება (მათ შორის, ელექტრონული ფორმით: მოკლე ტექსტური შეტყობინება, ელექტრონული ფოსტა) ვებ-გვერდზე მითითებული პროდუქტისა, თუ მომსახურების თაობაზე. ვებ-გვერდზე მითითებული ბმულები „კოსი -კონცეფთ ოფ სეიფთი"  უფლებამოსილია ვებ-გვერდზე მიუთითოს ჰიპერბმულები, მესამე პირის მფლობელობაში არსებული ვებ-გვერდების ბმულები, თქვენივე ინფორმირებულობის უზრუნველსაყოფად. მესამე პირის მფლობელობაში არსებული ბმულები და მათზე მითითებული ინფორმაცია, არ ექვემდებარება „კოსი -კონცეფთ ოფ სეიფთის"  კონტროლს, ხოლო მათზე მოცემული პროდუქტებისა და შინაარსის სიზუსტე არ წარმოადგენს კომპანიის პასუხისმგებლობის საგანს. შესაბამისად, თქვენ ხართ პასუხისმგებელი მესამე პირების რესურსებზე/ვებ-გვერდზე არსებული წესებისა და პირობების გაცნობაზე. ცვლილების განხორციელება „კოსი -კონცეფთ ოფ სეიფთი"  უფლებამოსილია ცვლილება შეიტანოს წინამდებარე წესებსა და პირობებში მომხმარებელთათვის წინასწარი შეტყობინების გარეშე. მომხმარებელი პასუხისმგებელია რეგულარულად გაეცნოს წინამდებარე წესებსა და პირობებს. თქვენ მიერ ვებ-გვერდზე სტუმრობა/მითითებული ინფორმაციის გამოყენება ავტომატურად ნიშნავს თქვენს დათანხმებას წინამდებარე წესებისა და პირობების მოთხოვნებზე.

                        მარეგულირებელი სამართალი და იურისდიქცია წინამდებარე წესები და პირობები რეგულირდება საქართველოს კანონმდებლობით.

                        დავის წარმოშობის შემთხვევაში, საქმეს განიხილავს საქართველოს საერთო სასამართლოების სისტემა კანონმდებლობით დადგენილი წესით. წინამდებარე დანაწესების კონკრეტული ჩანაწერის ბათილობა არ იწვევს წესებისა და პირობების სხვა დათქმების ბათილობას.


                        საკონტაქტო ინფორმაცია

                        ნებისმიერი კითხვის არსებობის შემთხვევაში, რაც უკავშირდება წინამდებარე წესებსა და პირობებს და ვებ-გვერდზე მითითებულ ინფორმაციას,  გთხოვთ, მოგვმართოთ წერილობითი სახით მისამართზე: თბილისი, სიმონ ჩიქოვანის 34 ან მოგვწეროთ ელექტრონული ფოსტის საშუალებით:
                    </p>




                <!-- Form END -->
            </div>
        </div>
    </section>
    <!-- =======================
        Blog detail END -->

    <!-- =======================

        Related blogs END -->

</main>

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection
