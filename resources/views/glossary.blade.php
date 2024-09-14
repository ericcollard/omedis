<x-app-layout>
    @push('pagetitle', 'Glossary')
    @push('breadcrumb')
        @php(
        $breadcrumb_items = [
                    ['title' => 'Glossary', 'url' => route('glossary')],
                ]
        )
        <livewire:breadcrumb-component :items="$breadcrumb_items" />
    @endpush

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class=" grid grid-cols-1 p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <div>
                        <div class="flex items-center">
                            <h1 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Glossary
                            </h1>
                        </div>
                        <p class="mt-4 text-red-500 font-semibold dark:text-gray-400 text-sm leading-relaxed">
                            Understanding what we are talking about, and sharing the same langage is the first basis of a collaboration project !
                            In the current page, we are defining some words that are used everywhere in the OMEDIS standard.
                        </p>
                    </div>

                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">

                    <div>
                        <h2 id='product' class="mt-4 font-semibold text-gray-500 dark:text-white">Product</h2>
                        <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            In OMEDIS Standard, the word PRODUCT is refering to a generic product, that can refer to many different versions like size, color etc.
                        </p>
                        <p class="mt-2 text-indigo-700 dark:text-gray-400 text-sm leading-relaxed">
                            Lets consider the "Apple IPHONE 15" product, that exists in different colors (white, blue...), and with different Capacity (8 Go, 16 Go ..).
                            <br/>In that exemple,
                            <br/>- "IPHONE 15" is what we call the PRODUCT
                            <br/>- "IPHONE 15 White 16 Go" is what we call one VARIANT of the "IPHONE 15" PRODUCT
                        </p>

                        <h2 id='variant'  class="mt-4 font-semibold text-gray-500 dark:text-white">Variant</h2>
                        <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            A VARIANT refers to a specific version or model of a PRODUCT that is slightly different from other versions offered by the same manufacturer.
                            <br/>These differences can include variations in features, specifications, colors, sizes, or any other ATTRIBUTE that distinguish one variant from another.
                        </p>
                        <p class="mt-2 text-indigo-700 dark:text-gray-400 text-sm leading-relaxed">
                            "IPHONE 15 White 16 Go" is what we call one VARIANT of the "IPHONE 15" PRODUCT
                        </p>

                        <h2 id='attribute'  class="mt-4 font-semibold text-gray-500 dark:text-white">Attribute</h2>
                        <P class="mt-2 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            An ATTRIBUTE is one specific data, that is part of the definition of a PRODUCT or VARIANT.</P>
                        <P class="mt-2 text-indigo-700 dark:text-gray-400 text-sm leading-relaxed">
                            Category, Brand, Retail price, Weight, Color are exemple of ATTRIBUTES.
                        </P>
                        <P class="mt-2 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            We will call "attribute name" the word that identify the attribute ("brand" is an ATTRIBUTE name)
                            <br/>We will call "attribute value" the specific value for an product attribute ("Apple" is an ATTRIBUTE value for the "IPHONE" Product)
                        </p>

                        <P class="mt-2 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            There are two types of ATTRIBUTES :
                            <br/>- "<b class="text-red-500 ">Standard attributes</b>" that are used to describe a product (ex. brand, category ...)
                            <br/>- "<b class="text-red-500 ">Variant attributes</b>" that are used to qualify the specificity of one VARIANT (ex. size, color)
                            <br/>In OMEDIS standard, the convention is to prefix any "Variant attributes" by "var-" keyword. So "var-color" is a variant attributes used to qualify the color of one version of product.
                        </p>
                        <p class="mt-2 text-indigo-700 dark:text-gray-400 text-sm leading-relaxed">
                            "White", "16 Go" are variant ATTRIBUTE values defining the "IPHONE 15 White 16 Go" VARIANT
                            <br/>"Apple" is an standard ATTRIBUTE value defining the "IPHONE 15" PRODUCT
                        </p>


                        <a href="#" class="mt-6 flex flex-col md:flex-row md:w-3/4 shadow items-center bg-white border border-gray-200 rounded-lg  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src=" {{ url('/storage/card-left.png') }}" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <p class="text-sm text-gray-600 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path d="M5.85 3.5a.75.75 0 0 0-1.117-1 9.719 9.719 0 0 0-2.348 4.876.75.75 0 0 0 1.479.248A8.219 8.219 0 0 1 5.85 3.5ZM19.267 2.5a.75.75 0 1 0-1.118 1 8.22 8.22 0 0 1 1.987 4.124.75.75 0 0 0 1.48-.248A9.72 9.72 0 0 0 19.266 2.5Z" />
                                        <path fill-rule="evenodd" d="M12 2.25A6.75 6.75 0 0 0 5.25 9v.75a8.217 8.217 0 0 1-2.119 5.52.75.75 0 0 0 .298 1.206c1.544.57 3.16.99 4.831 1.243a3.75 3.75 0 1 0 7.48 0 24.583 24.583 0 0 0 4.83-1.244.75.75 0 0 0 .298-1.205 8.217 8.217 0 0 1-2.118-5.52V9A6.75 6.75 0 0 0 12 2.25ZM9.75 18c0-.034 0-.067.002-.1a25.05 25.05 0 0 0 4.496 0l.002.1a2.25 2.25 0 1 1-4.5 0Z" clip-rule="evenodd" />
                                    </svg>
                                    Gerenal philosophy
                                </p>
                                <div class="text-gray-500 font-bold text-xl mb-2">Splitting is better</div>
                                <p class=" text-gray-500 dark:text-gray-400 text-sm leading-relaxed">Since data will be handled by algorithms, and used in diverse applications,
                                    pièces of information have to be separated and clearly identified. so that each application can use data as wanted.</p>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">Lets take the exemple of one product name : "Duotone SuperHero HD blue 4.7 2025 Sail"</p>

                                <div class=" grid grid-cols-2">
                                    <div class="mt-2 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        One may consider :
                                        <br/><b>Name</b> : Duotone SuperHero blue HD 2025
                                        <br/><b>Category</b> : Sail
                                        <br/><b>Size</b> : 4.7
                                    </div>
                                    <div class="mt-2 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        Best practice is to consider :
                                        <br/><b>Brand</b> : Duotone
                                        <br/><b>Name</b> : SuperHero HD
                                        <br/><b>Color</b> : blue
                                        <br/><b>Season</b> : 2025
                                        <br/><b>Category</b> : Sail
                                        <br/><b>Size</b> : 4.7
                                    </div>
                                </div>
                            </div>
                        </a>

                        <h2 id='unit'  class="mt-4 font-semibold text-gray-500 dark:text-white">Unit</h2>
                        <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            In OMEDIS Standard, the word UNIT is refering to the unit of mesurement corresponding to an attribute.
                            <br/>If an attribute doesn't have any unit (ex. EAN Code), the value will be "none"
                        </p>
                        <p class="mt-2 text-indigo-700 dark:text-gray-400 text-sm leading-relaxed">
                            The unit for "weight" attribute is "kg"
                            <br/>If we have to set a value of 2.56, this is corresponding to 2.56kg
                        </p>

                        <h2  id='datatype'  class="mt-4 font-semibold text-gray-500 dark:text-white">Datatype</h2>
                        <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            When exchanging data between partners, using the same conventions is a key point. One main convention is about formatting the data.
                            <br/>Each attribute is defined by a DATATYPE, and this DATATYPE is fixing the format of data.
                        </p>
                        <p class="mt-2 text-indigo-700 dark:text-gray-400 text-sm leading-relaxed">
                            The DATATYPE for "weight" attribute is "float"
                            <br/>"float" is defined as a numeric value with maximum 4 digits decimal part.
                            <br/>Decimal separator has to be a dot: ".", no thousand separator.
                            <br/>Ex. "123456.45" ("123,12" or "1   2547.658774" will not be valid)
                        </p>

                    </div>

            </div>
        </div>
    </div>
</x-app-layout>
