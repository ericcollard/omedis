<x-app-layout>
    @push('pagetitle', 'Containers')
    @push('breadcrumb')
        @php(
        $breadcrumb_items = [
                    ['title' => 'Containers', 'url' => route('containers')],
                ]
        )
        <livewire:breadcrumb-component :items="$breadcrumb_items" />
    @endpush

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class=" grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <div>
                        <div class="flex items-center">
                            <h1 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Containers (files)
                            </h1>
                        </div>
                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            This part or the standard is about organisation of data in datasets.
                            </br>You will also be able to download sample files.
                        </p>
                    </div>

                    <div>
                        <div class="flex items-center">
                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed"> You will find here</p>
                        </div>
                            <ul class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                <li><i class="fa-regular fa-star fa-2xs"></i> Which type of file we can use (ie. xls, csv, xml, api)</li>
                                <li><i class="fa-regular fa-star fa-2xs"></i> How data is organised in the file</li>
                            </ul>
                    </div>

                    <div>
                        <p class="mt-4 text-red-500 font-semibold dark:text-gray-400 text-sm leading-relaxed">
                            Before reading this page, we strongly suggest reading the Glossary, so that you will perfectly unserstand the meaning of each terms.
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('glossary') }}"
                           class="mt-4 inline-flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                            Read glossary
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">

                    <div>
                        <h2 id="p7" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">File type</h2>
                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Datas can be exchange through digital file, or REST API.
                            </br>If using a file, we suggest to use <b>XML</b>, <b>CSV</b> or <b>Excel</b> files.
                            </br>Be carefull with <b>EXCEL</b> native files (xls and xlsx) since content is highly dependant
                            from regional settings of the source computer. Keep in mind that excel file can be saved as csv.
                        </p>
                    </div>

                    <div>
                        <h2 id="p7" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">CSV/XLS file (tabular like file)</h2>
                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed"><a href="{{ URL::to( 'storage/sample.csv')  }}"><i class="fa-solid fa-file-arrow-down"></i> Download a sample CSV</a> file</p>

                        <p class="mt-4 text-gray-500 font-semibold dark:text-gray-400 text-sm leading-relaxed">Format</p>
                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            If using csv file, please report to the RFC 4180 standard :
                            </br>- The field separator has to be comma
                            </br>- End of line has to be CR/LF
                            </br>- Coding has to be UTF-8
                            </br>- Any field quoted with double quote
                        </p>

                        <p class="mt-4 text-gray-500 font-semibold dark:text-gray-400 text-sm leading-relaxed">Organisation of the file</p>
                        <p class="mt-4 ml-3 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            <b>First line</b> is the list of <a href="{{  route('glossary').'#attribute' }}">ATTRIBUTES</a> name (ie. columns name), conform to OMEDIS <a href="{{ route('attributes') }}">attributes name list</a>.
                            <br/>This list contain both standard attributes and variant attributes (see <a href="{{  route('glossary').'#attribute' }}">glossary</a> for distinction).
                            </br>The order of columns can be set freely. The first line will indicate what data should be considered.
                        </p>
                        <p class="mt-4 ml-3 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            <b>Next lines</b>
                            <br/>Each line is corresponding to one <a href="{{  route('glossary').'#attribute' }}">VARIANT</a> (see green line is the sample below).
                            <br/>When one <a href="{{  route('glossary').'#product' }}">PRODUCT</a> has only one version (no <a href="{{  route('glossary').'#attribute' }}">VARIANT</a>), the line is feed by the <a href="{{  route('glossary').'#product' }}">PRODUCT</a> itself (see yellow line is the sample below).
                        </p>
                        <p class="mt-4 text-gray-500 font-semibold dark:text-gray-400 text-sm leading-relaxed">Rules</p>
                        <ul class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            <li class="ml-3"><i class="fa-regular fa-star fa-2xs"></i>
                                Different <a href="{{  route('glossary').'#attribute' }}">VARIANT</a> of a same <a href="{{  route('glossary').'#product' }}">PRODUCT</a> needs to <strong>strictly share the same NAME attribute value</strong>,
                                and be declared in consecutive lines (see the blue lines in the exemple below).</li>
                            <li class="ml-3"><i class="fa-regular fa-star fa-2xs"></i>
                                <a href="{{  route('glossary').'#attribute' }}">Variant attributes</a> values are <b>only used to qualify a specific VARIANT</b>.
                                They have to be leave empty if not defining a specific variant.
                                <br/>Ex. If one product has every variant with black color, "var-color" has to be left empty (you can put the BLACK word in the NAME of the product)
                                <br/>Ex. If one product has no variant, all variant attributes have to be left empty
                            </li>
                        </ul>
                        <img class="mt-4" src="{{ asset('storage/omedis-data-file-logic.png') }}" />
                    </div>

                    <div>
                        <h2 id="p7" class="mt-4 text-lg font-semibold text-gray-500 dark:text-white">XML file</h2>
                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed"><a href="{{ URL::to( 'storage/sample.xml')  }}"><i class="fa-solid fa-file-arrow-down"></i> Download a sample XML</a> file</p>
                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            If using csv file, please conform to XML 1.0 Specification :
                            </br>- Coding has to be UTF-8
                        </p>
                        <ul class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            <li class="ml-3"><i class="fa-regular fa-star fa-2xs"></i>
                                Different <a href="{{  route('glossary').'#attribute' }}">VARIANT</a> of a same <a href="{{  route('glossary').'#product' }}">PRODUCT</a> have to <strong>be grouped in the same product tag</strong></li>
                            <li class="ml-3"><i class="fa-regular fa-star fa-2xs"></i>
                                <a href="{{  route('glossary').'#attribute' }}">Variant attributes</a> values are <b>only used to qualify a specific VARIANT</b>.
                                They have to be leave empty if not defining a specific variant.
                                <br/>Ex. If one product has every variant with black color, "var-color" has to be left empty (you can put the BLACK word in the NAME of the product)
                                <br/>Ex. If one product has no variant, all variant attributes have to be left empty
                            </li>
                        </ul>

                        <img class="mt-4" src="{{ asset('storage/omedis-data-set-logic.jpg') }}" />
                    </div>

            </div>
        </div>
    </div>
</x-app-layout>
