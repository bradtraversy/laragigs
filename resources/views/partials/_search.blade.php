{{-- <form action="/">
    <div class="relative m-4 border-2 border-gray-100 rounded-lg">
        <div class="absolute top-4 left-3">
            <i class="z-20 text-gray-400 fa fa-search hover:text-gray-500"></i>
        </div>
        <input type="text" name="search" class="z-0 w-full pl-10 pr-20 rounded-lg h-14 focus:shadow focus:outline-none"
            placeholder="Search Laravel Gigs..." />
        <div class="absolute top-2 right-2">
            <button type="submit" class="w-20 h-10 text-white bg-red-500 rounded-lg hover:bg-red-600">
                Search
            </button>
        </div>
    </div> --}}



<form action="{{ url('search') }}" method="GET" class="mb-4">
    <div class="flex">
        {{-- <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your
            Email</label> --}}
        {{-- <button id="dropdown-button" data-dropdown-toggle="dropdown"
            class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
            type="button">All categories <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button> --}}
        {{-- <div id="dropdown"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                <li>
                    <button type="button"
                        class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                </li>
                <li>
                    <button type="button"
                        class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                </li>
                <li>
                    <button type="button"
                        class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                </li>
                <li>
                    <button type="button"
                        class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                </li>
            </ul>
        </div> --}}
        {{-- <select id="countries"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>United States</option>
            <option>Canada</option>
            <option>France</option>
            <option>Germany</option>
        </select> --}}
        <fieldset>
            {{-- <legend>Occupation</legend> --}}
            <select
                class="form-control dropdown bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                id="occupation" name="occupation">
                <option value="all" selected="selected">All Occupation</option>
                <optgroup label="Healthcare Practitioners and Technical Occupations:">
                    <option value="Chiropractor">Chiropractor</option>
                    <option value="Dentist">Dentist</option>
                    <option value="Dietitian or Nutritionist">
                        Dietitian or Nutritionist
                    </option>
                    <option value="Optometrist">Optometrist</option>
                    <option value="Pharmacist">Pharmacist</option>
                    <option value="Physician">Physician</option>
                    <option value="Physician Assistant">Physician Assistant</option>
                    <option value="Podiatrist">Podiatrist</option>
                    <option value="Registered Nurse">Registered Nurse</option>
                    <option value="Therapist">Therapist</option>
                    <option value="Veterinarian">Veterinarian</option>
                    <option value="Health Technologist or Technician">
                        Health Technologist or Technician
                    </option>
                    <option value="Other Healthcare Practitioners and Technical Occupation">
                        Other Healthcare Practitioners and Technical Occupation
                    </option>
                </optgroup>

                <optgroup label="Healthcare Support Occupations:">
                    <option value="Nursing, Psychiatric, or Home Health Aide">
                        Nursing, Psychiatric, or Home Health Aide
                    </option>
                    <option value="Occupational and Physical Therapist Assistant or Aide">
                        Occupational and Physical Therapist Assistant or Aide
                    </option>
                    <option value="Other Healthcare Support Occupation">
                        Other Healthcare Support Occupation
                    </option>
                </optgroup>
                <optgroup label="Business, Executive, Management, and Financial Occupations:">
                    <option value="Chief Executive">Chief Executive</option>
                    <option value="General and Operations Manager">
                        General and Operations Manager
                    </option>
                    <option value="Advertising, Marketing, Promotions, Public Relations, and Sales
          Manager">
                        Advertising, Marketing, Promotions, Public Relations, and Sales
                        Manager
                    </option>
                    <option value="Operations Specialties Manager (e.g., IT or HR Manager)">
                        Operations Specialties Manager (e.g., IT or HR Manager)
                    </option>
                    <option value="Construction Manager">Construction Manager</option>
                    <option value="Engineering Manager">Engineering Manager</option>
                    <option value="Accountant, Auditor">Accountant, Auditor</option>
                    <option value="Business Operations or Financial Specialist">
                        Business Operations or Financial Specialist
                    </option>
                    <option value="Business Owner">Business Owner</option>
                    <option value="Other Business, Executive, Management, Financial Occupation">
                        Other Business, Executive, Management, Financial Occupation
                    </option>
                </optgroup>
                <optgroup label="Architecture and Engineering Occupations:">
                    <option value="Architect, Surveyor, or Cartographer">
                        Architect, Surveyor, or Cartographer
                    </option>
                    <option value="Engineer">Engineer</option>
                    <option value="Other Architecture and Engineering Occupation">
                        Other Architecture and Engineering Occupation
                    </option>
                </optgroup>
                <optgroup label="Education, Training, and Library Occupations:">
                    <option value="Postsecondary Teacher (e.g., College Professor)">
                        Postsecondary Teacher (e.g., College Professor)
                    </option>
                    <option value="Primary, Secondary, or Special Education School Teacher">
                        Primary, Secondary, or Special Education School Teacher
                    </option>
                    <option value="Other Teacher or Instructor">
                        Other Teacher or Instructor
                    </option>
                    <option value="Other Education, Training, and Library Occupation">
                        Other Education, Training, and Library Occupation
                    </option>
                </optgroup>
                <optgroup label="Other Professional Occupations:">
                    <option value="Arts, Design, Entertainment, Sports, and Media Occupations">
                        Arts, Design, Entertainment, Sports, and Media Occupations
                    </option>
                    <option value="Computer Specialist, Mathematical Science">
                        Computer Specialist, Mathematical Science
                    </option>
                    <option
                        value="Counselor, Social Worker, or Other Community and Social Service
          Specialist">
                        Counselor, Social Worker, or Other Community and Social Service
                        Specialist
                    </option>
                    <option value="Lawyer, Judge">Lawyer, Judge</option>
                    <option
                        value="Life Scientist (e.g., Animal, Food, Soil, or Biological Scientist,
          Zoologist)">
                        Life Scientist (e.g., Animal, Food, Soil, or Biological Scientist,
                        Zoologist)
                    </option>
                    <option value="Physical Scientist (e.g., Astronomer, Physicist, Chemist, Hydrologist)">
                        Physical Scientist (e.g., Astronomer, Physicist, Chemist, Hydrologist)
                    </option>
                    <option
                        value="Religious Worker (e.g., Clergy, Director of Religious Activities or
          Education)">
                        Religious Worker (e.g., Clergy, Director of Religious Activities or
                        Education)
                    </option>
                    <option value="Social Scientist and Related Worker">
                        Social Scientist and Related Worker
                    </option>
                    <option value="Other Professional Occupation">
                        Other Professional Occupation
                    </option>
                </optgroup>
                <optgroup label="Office and Administrative Support Occupations:">
                    <option value="Supervisor of Administrative Support Workers">
                        Supervisor of Administrative Support Workers
                    </option>
                    <option value="Financial Clerk">Financial Clerk</option>
                    <option value="Secretary or Administrative Assistant">
                        Secretary or Administrative Assistant
                    </option>
                    <option value="Material Recording, Scheduling, and Dispatching Worker">
                        Material Recording, Scheduling, and Dispatching Worker
                    </option>
                    <option value="Other Office and Administrative Support Occupation">
                        Other Office and Administrative Support Occupation
                    </option>
                </optgroup>
                <optgroup label="Services Occupations:">
                    <option
                        value="Protective Service (e.g., Fire Fighting, Police Officer, Correctional
          Officer)">
                        Protective Service (e.g., Fire Fighting, Police Officer, Correctional
                        Officer)
                    </option>
                    <option value="Chef or Head Cook">Chef or Head Cook</option>
                    <option value="Cook or Food Preparation Worker">
                        Cook or Food Preparation Worker
                    </option>
                    <option value="Food and Beverage Serving Worker (e.g., Bartender, Waiter, Waitress)">
                        Food and Beverage Serving Worker (e.g., Bartender, Waiter, Waitress)
                    </option>
                    <option value="Building and Grounds Cleaning and Maintenance">
                        Building and Grounds Cleaning and Maintenance
                    </option>
                    <option
                        value="Personal Care and Service (e.g., Hairdresser, Flight Attendant,
          Concierge)">
                        Personal Care and Service (e.g., Hairdresser, Flight Attendant,
                        Concierge)
                    </option>
                    <option value="Sales Supervisor, Retail Sales">
                        Sales Supervisor, Retail Sales
                    </option>
                    <option value="Retail Sales Worker">Retail Sales Worker</option>
                    <option value="Insurance Sales Agent">Insurance Sales Agent</option>
                    <option value="Sales Representative">Sales Representative</option>
                    <option value="Real Estate Sales Agent">Real Estate Sales Agent</option>
                    <option value="Other Services Occupation">
                        Other Services Occupation
                    </option>
                </optgroup>
                <optgroup label="Agriculture, Maintenance, Repair, and Skilled Crafts Occupations:">
                    <option value="Construction and Extraction (e.g., Construction Laborer, Electrician)">
                        Construction and Extraction (e.g., Construction Laborer, Electrician)
                    </option>
                    <option value="Farming, Fishing, and Forestry">
                        Farming, Fishing, and Forestry
                    </option>
                    <option value="Installation, Maintenance, and Repair">
                        Installation, Maintenance, and Repair
                    </option>
                    <option value="Production Occupations">Production Occupations</option>
                    <option value="Other Agriculture, Maintenance, Repair, and Skilled Crafts Occupation">
                        Other Agriculture, Maintenance, Repair, and Skilled Crafts Occupation
                    </option>
                </optgroup>
                <optgroup label="Transportation Occupations:">
                    <option value="Aircraft Pilot or Flight Engineer">
                        Aircraft Pilot or Flight Engineer
                    </option>
                    <option value="Motor Vehicle Operator (e.g., Ambulance, Bus, Taxi, or Truck Driver)">
                        Motor Vehicle Operator (e.g., Ambulance, Bus, Taxi, or Truck Driver)
                    </option>
                    <option value="Other Transportation Occupation">
                        Other Transportation Occupation
                    </option>
                </optgroup>
                <optgroup label="Other Occupations:">
                    <option value="Military">Military</option>
                    <option value="Homemaker">Homemaker</option>
                    <option value="Other Occupation">Other Occupation</option>
                    <option value="Don't Know">Don&apos;t Know</option>
                    <option value="Not Applicable">Not Applicable</option>
                </optgroup>
            </select>
        </fieldset>
        <div class="relative w-full">
            <input type="search" id="search-dropdown" name="name"
                class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500 md:mr-2"
                placeholder="Search Developer, Accountant, Teacher...">
            <button type="submit"
                class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </div>
</form>

{{-- </form> --}}
