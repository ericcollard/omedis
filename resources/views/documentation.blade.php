<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="position:relative">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item">Documentation</li>
                </ol>
                <p id="version">VERSION<br/><span class="value">{{ \App\Models\History::getLastVersion() }}</span></p>
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
                        <li><i class="fa-regular fa-star fa-2xs"></i> <a href="#p8">How to use OMEDIS standard</a></li>
                        <li><i class="fa-regular fa-star fa-2xs"></i> <a href="#p9">How to collaborate to OMEDIS standard</a></li>
                    </ul>
                </div>
            </div>
            <div class="md:col-span-2">
                <div class="container">
                    <h2 id="p1" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">What is EDI ?</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        EDI acronym is for Electronic Data Interchange. EDI is a technique that replaces physical exchange of documents between companies (data, orders, invoices, delivery slips, etc.) according to a standardised format.
                        The data are structured according to referenced international technical standards (e.g. Edifact).
                    </p>

                    <h2 id="p2" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">Why EDI for outdoor industry ?</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        From now on, all retailers are using an invoicing/stock management IT tool and/or an e-commerce website.
                        Therefore, they all need to integrate product-related business data into some computer system.
                        Inter-company electronic data interchange is therefore now at the heart of our daily work.
                        Thanks to the will for brands offering best possible product for each need, the volume of data is growing exponentially with ever-longer lists of products.
                        <br/>On the retailer side, integration of these data is beginning to weight significantly on the work-hours.
                        On top of all this time that is no more devoted to customers, manual input is a large source of errors as well.
                        <br/>So it is essential to rationalize these exchanges and automate as much as possible the tedious data entry tasks.
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
                        Depending on company internal classification, you can find the following value :
                        <br/>- "Windsurf boardbag"
                        <br/>- "Windsurf Board Protection"
                        <br/>- "windsurf-protection-boardbag"
                        <br/>- "Housse de flotteur de windsurf"
                        <br/>- ...
                        <br/>The standard is defining a list of possible values, that each computing systems can relate to his own internal representation.
                        <br/><br/>
                        Let's take a 3rd exemple with product pictures : The standard is defining the format,size, type of picture, and the way to supply then.
                        <br/>
                        <br/>Sizes for snowboard boots : 00g265-41 / 26.0 / 260 / 26,0 / 26
                        <br/>Etc.
                        <br/>
                        <br/>The standard is also defining the list of data that have to (required) or can be (optional) supplied for each product, and the way to named each one.
                        <br/>
                        <br/><img src="{{ asset('storage/onlyonetime.jpg') }}" />
                        <br/>Thanks to this standard, each supplier has only to develop one translation program from his own ERP to OMEDIS.
                        Each retailer has only to develop one translation program from OMEDIS to his own retail management system.
                        <br/>This avoid multiplicity of translation programs like today, for both side.
                    </p>

                    <h2 id="p4" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">What is OMEDIS ?</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        OMEDIS is defining a standard for data exchange between brands, distributors and retailers, related to product data.
                        This includes technical data like size or color, logistical data like weight and dimensions, business data like wholesale price or retail price,
                        marketing data like marketing description or pictures.
                        <br/>
                        OMEDIS is based on a collective public repository that can be updated by the community, letting everyone be aware of updates.
                        <br/>
                        OMEDIS is freely accessible, and will stay free lifetime, because standardisation of exchange is a win-win feature for all partners.
                    </p>

                    <h2 id="p5" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">What is not OMEDIS ?</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        OMEDIS is not a software, but only a standard definition. The current website is only the tool giving easy access to the standard definition.
                        <br/>OMEDIS does nothing, except helping partners to exchange data with efficiency.
                        <br/>OMEDIS will not manage the exchange of data. This stay the role of partners that can contrôle the diffusion.
                        <br/>OMEDIS is not a goal but only a middleware
                    </p>

                    <h2 id="p6" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">OMEDIS more in details</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        OMEDIS is defining
                        <br/>- The possible containers for data exchange (ie. csv file, excel file, xml file, api call)
                        <br/>- The <a href="{{ route('attribute.index') }}">list of attributes</a> describing each product and variant, including mandatory and optional attributes (like brand name, product name, categories, prices)
                        <br/>- The <a href="{{ route('datatype.index') }}">list of datatype</a> (Ex. String, Currency, Integer, Boolean), and the way to write data for each data type (character coding, delimiters, limits etc.)
                        <br/>- The <a href="{{ route('unit.index') }}">list of units</a> (Ex. Eur, Usd, Liter, Meter, Kilogram), the way to name them, and the way to use them
                        <br/>- <a href="{{ route('attributelistvalue.index') }}">Attribute list values</a> : for certain type of attributes, values have to be chosen in a closed list of possible values, like colors, categories, brand name, etc.). Omedis is maintaining an up-to-date list of authorized values.
                    </p>

                    <h2 id="p7" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">Data exchange structure</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Once defined the content and standard of data, let's jump into the structure of exchange (how data are organised and transmitted)
                        <br/><strong>Data container</strong> : datas can be sent by digital file, or REST API
                        <br/><strong>Data file type</strong> : if using a file, we suggest to use exclusively xml or csv file. We
                        should avoid excel native file since content is highly dependant from regional settings of the source computer. Keep in mind that excel file can be saved as csv.
                        <br/><strong>CSV file (tabular like file)</strong> : if using csv file, please report to the RFC 4180 standard.
                        The field separator has to be comma, end of line CR/LF, coding UTF-8, any field quoted with double quote.
                        First line has to be the list of attribute name, conform to OMEDIS attributes name.
                        <br/><img src="{{ asset('storage/omedis-data-file-logic.jpg') }}" />
                        <br/><strong>XML file (dataset file)</strong> : if using XML file, please conform to XML 1.0 Specification,
                        using UTF-8 encoding.
                        <br/><img src="{{ asset('storage/omedis-data-set-logic.jpg') }}" />
                        <br/><strong>File contend</strong> : when using a digital file, data has to be organised with records (xml record or csv line) and fields.
                        Each record is representing one product variant.
                        <br/>When using a tabular like file (eg csv), different variant of a same product need to <strong>strictly share the same product name</strong>,
                        and be declared in consecutive records. This is the way interpreting programs will group variants in a same product.
                        With dataset file, this rules is not required since variants are grouped in a "product" tag.
                    </p>

                    <h2 id="p8" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">How to use OMEDIS standard</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        We suggest that you start by downloading a sample <a href="{{ URL::to( 'storage/sample.csv')  }}">csv</a>
                        or <a href="{{ URL::to( 'storage/sample.xml')  }}">xml</a> file, so that you will clearly understand the structure of container.
                    <br/>
                        Then you can have a look at the list of possible <a href="{{ route('attribute.index') }}">attributes</a> for each product. For each one, you will
                        find the required datatype and unit.
                        <br/>
                        Now it's time for you to develop a program that can export (if you are a brand) or import (if you are a retailer) data to or from your own IT system.
                        <br/>This program will be a sort of translator from or to you system.
                    </p>

                    <h2 id="p9" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">How to collaborate to OMEDIS standard</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Of course, OMEDIS has to be a common tool for everyone in our industry, so it's very important that it would be well-defined, and be able to cover
                        a large spectrum of needs.
                        <br/>The only way is to have a panel of contributors, giving each a part of their knowledge to the community. Everyone is welcome to help.
                        <br/>The specificities of each branch of our industry is like an evidence in categories, list of possible value for variants etc.
                    </p>
                </div>

            </div>
        </div>


    </div>

</x-app-layout>
