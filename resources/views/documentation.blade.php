<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item">Documentation</li>
                </ol>
            </nav>
        </h2>
    </x-slot>

    <div>



        <div class="grid grid-cols-3 md:grid-cols-3 ">
            <div  class="hidden sm:flex bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <div class="container">
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        This documentation is presenting the concept of standard definition of EDI, and how to use it.
                    </p>
                    <ul class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        <li><i class="fa-regular fa-star fa-2xs"></i> <a href="#p1">What is EDI ?</a></li>
                        <li><i class="fa-regular fa-star fa-2xs"></i> <a href="#p2">Why EDI for outdoor industry ?</a></li>
                        <li><i class="fa-regular fa-star fa-2xs"></i> <a href="#p3">Why a standard ?</a></li>
                        <li><i class="fa-regular fa-star fa-2xs"></i> <a href="#p4">What is OMEDIS ?</a></li>
                        <li><i class="fa-regular fa-star fa-2xs"></i> <a href="#p5">What is not OMEDIS ?</a></li>
                        <li><i class="fa-regular fa-star fa-2xs"></i> <a href="#p6">OMEDIS more in details</a></li>
                        <li><i class="fa-regular fa-star fa-2xs"></i> <a href="#p7">Data exchange structure</a></li>
                    </ul>
                </div>
            </div>
            <div class="md:col-span-2">
                <div class="container">
                    <h2 id="p1" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">What is EDI ?</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        EDI acronym is for Electronic Data Interchange. EDI is a technique that replaces physical exchanges of documents between companies (data, orders, invoices, delivery slips, etc.) with exchanges, according to a standardised format.
                        The data are structured according to reference international technical standards (e.g. Edifact).
                    </p>

                    <h2 id="p2" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">Why EDI for outdoor industry ?</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        From now on, all retailers are using an invoicing/stock management IT tool and/or an e-commerce website.
                        Therefore, they all need to integrate product-related business data into some computer system.
                        Inter-company electronic data interchange is therefore now at the heart of our daily work.
                        Thanks to the will of offering best possible product for each need, the volume of data is growing exponentially with ever-longer lists of products.
                        <br/>On the retailer side, integration of these data is beginning to weigh significantly on the work-hours, and all this input time is not devoted to customers.
                        So it is essential to rationalize these exchanges and automate as much as possible the tedious data entry tasks.
                    </p>

                    <h2 id="p3" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">Why a standard ?</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        As soon as we need to process data with automatic or semi-automatic engine, we need to standardised the format of these data.
                        This standard is a key so that heterogeneous computing systems may exchange data.
                        <br/>
                        As an exemple, let take a numerical value with decimal part, representing the retail price of one product.
                        Depending on regional policy, we can write this value in several ways :
                        <br/>- "1245.85€"
                        <br/>- "1245,85€"
                        <br/>- "1 245,85€"
                        <br/>- "1,245.85 Eur"
                        <br/>The standard is fixing the official way to exchange this value between two computing systems.
                        <br/><br/>
                        Let's take a second exemple with a string value, representing the category of product for classification.
                        Depending on company, you can find the following value :
                        <br/>- "Windsurf boardbag"
                        <br/>- "Windsurf Board Protection"
                        <br/>- "windsurf-protection-boardbag"
                        <br/>- "Housse de flotteur de windsurf"
                        <br/>- ...
                        <br/>The standard is fixing a list of possible values, that each computing systems can relate to his own internal representation.
                        <br/>
                    </p>

                    <h2 id="p4" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">What is OMEDIS ?</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        OMEDIS is defining a standard for data exchange between brands, distributors and retailers, related to product data.
                        This includes technical data like size or weight, business data like wholesale price or retail price,
                        marketing data like marketing description or pictures.
                        <br/>
                        OMEDIS is a collective repository that can be updated by the community, letting everyone be aware of updates.
                        <br/>
                        OMEDIS is freely accessible, and will stay free lifetime, because standardisation of exchange is a win-win feature for all partners.
                    </p>

                    <h2 id="p5" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">What is not OMEDIS ?</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        OMEDIS is not a software, but only a standard definition. It does nothing, except helping partners to exchange data with efficiency.
                        <br/>OMEDIS will not manage the exchange of data. This stay the role of partners
                        <br/>OMEDIS is not a goal but a middelware
                    </p>

                    <h2 id="p6" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">OMEDIS more in details</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        OMEDIS is defining
                        <br/>- A list of units (Ex. Eur, Usd, Liter, Meter, Kilogram), and the way to name and use them
                        <br/>- A list of datatype (Ex. String, Currency, Integer, Boolean), and the way to represent data for each data type
                        <br/>- Attribute list values : for a certain type of data, values have to be chosen in a closed list of possible values, like colors, categories, brand name, etc.). Omedis is maintaining an up-to-date list of authorized values.
                        <br/>- the list of attributes describing each product and variant, including mandatory and optional attributes
                    </p>

                    <h2 id="p7" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">Data exchange structure</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Once defined the contend and standard of data, let's jump into the stucture of exchange
                        <br/><strong>Data container</strong> : datas can be send by digital file, or REST API
                        <br/><strong>Data file type</strong> : if using a file, we suggest to use exclusively xml or csv file. We shoud avoid excel native file since contend is highly dependant from regional settings of the source computer.
                        <br/><strong>CSV file</strong> : if using csv file, please report to the RFC 4180 standard.
                        The field separator has to be comma, end of line CR/LF, coding UTF-8, any field quoted with double quote.
                        First line has to be the list of attribute name, conform to OMEDIS attributes name.
                        <br/><strong>XML file</strong> : if using XML file, please conform to XML 1.0 Specification, using UTF-8 encoding.
                        <br/><strong>File contend</strong> : when using a digital file, data has to be organised with records (xml record or csv line) and fields.
                        Each record is representing one product variant. Interpreting program will group variants thanks to their product name.
                        So different variant have to strictly share the same product name, and be declared in consecutive records.
                        Each field has top be one of those defined in OMEDIS <a href="{{ route('attribute.index') }}">Attributes</a>.
                        </br>
                    </p>
                </div>

            </div>
        </div>


    </div>

</x-app-layout>
