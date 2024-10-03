import ApplicationLogo from '@/Components/ApplicationLogo';
import { Link } from '@inertiajs/react';
import { useState } from 'react';

export default function Guest({ children }) {
    const [isSidebarOpen, setIsSidebarOpen] = useState(false);
    const [isEcommerceDropdownOpen, setIsEcommerceDropdownOpen] = useState(false);
    const [isProvider, setIsProvider] = useState(false);
    const [isCategory, setIsCategory] = useState(false);

    const toggleSidebar = () => {
        setIsSidebarOpen(!isSidebarOpen);
    };

    const toggleEcommerceDropdown = () => {
        setIsEcommerceDropdownOpen(!isEcommerceDropdownOpen);
    };
    const providerBet = () => {
        setIsProvider(!isProvider);
    };
    const toggleCategory = () => {
        setIsCategory(!isCategory);
    };
    return (
        <>
            <div>
                {/* Button to open/close sidebar */}
                <div>


                    {/* Sidebar */}
                    <aside id="sidebar-multi-level-sidebar" className={`fixed top-0 left-0 z-40 w-64 h-screen transition-transform ${isSidebarOpen ? 'translate-x-0' : '-translate-x-full'} md:translate-x-0`} aria-label="Sidebar">
                        <div className="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                            <ul className="space-y-2 font-medium">
                                <li>
                                    <img src="/images/logo.jpeg" alt="" />
                                </li>

                                <li className="pt-10">
                                <a href="#" className="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Home</a>
                                </li>
                                {/* E-commerce dropdown */}
                                <li>
                                    <button
                                        onClick={toggleEcommerceDropdown}
                                        type="button"
                                        className="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                        aria-expanded={isEcommerceDropdownOpen ? "true" : "false"}
                                    >
                                        
                                        <span className="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Games</span>
                                        <svg className={`w-3 h-3 ${isEcommerceDropdownOpen ? 'rotate-180' : ''}`} aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <ul className={`${isEcommerceDropdownOpen ? 'block' : 'hidden'} py-2 space-y-2`}>
                                        <li>
                                            <a href="#" className="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Slots</a>
                                        </li>
                                        <li>
                                            <a href="#" className="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Live Dealers</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <button
                                        onClick={providerBet}
                                        type="button"
                                        className="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                        aria-expanded={isEcommerceDropdownOpen ? "true" : "false"}
                                    >
                                        
                                        <span className="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Provider</span>
                                        <svg className={`w-3 h-3 ${isEcommerceDropdownOpen ? 'rotate-180' : ''}`} aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <ul className={`${isProvider ? 'block' : 'hidden'} py-2 space-y-2`}>
                                        <li>
                                            <a href="#" className="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">All</a>
                                        </li>
                                        <li>
                                            <a href="#" className="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Live Dealers</a>
                                        </li>
                                        <li>
                                            <a href="#" className="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Bingo</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <button
                                        onClick={toggleCategory}
                                        type="button"
                                        className="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                        aria-expanded={isCategory ? "true" : "false"}
                                    >
                                        
                                        <span className="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Category</span>
                                        <svg className={`w-3 h-3 ${isCategory ? 'rotate-180' : ''}`} aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <ul className={`${isCategory ? 'block' : 'hidden'} py-2 space-y-2`}>
                                        <li>
                                            <a href="#" className="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Buy Bonus</a>
                                        </li>
                                        <li>
                                            <a href="#" className="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Hold And Span</a>
                                        </li>
                                        <li>
                                            <a href="#" className="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Jackpot</a>
                                        </li>
                                        <li>
                                            <a href="#" className="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Megaways</a>
                                        </li>
                                    </ul>
                                </li> 
                            </ul>
                        </div>
                    </aside>
                </div>

                <div className="">
                    <div className="md:ml-64">
                        <div className="bg-gray-900">
                            <div className="container mx-auto">
                                <div className="flex items-center justify-between px-4 py-4">
                                    <div>
                                        <button
                                            onClick={toggleSidebar}
                                            aria-controls="sidebar-multi-level-sidebar"
                                            type="button"
                                            className="inline-flex items-center p-2 ms-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                        >
                                            <span className="sr-only">Open sidebar</span>
                                            <svg className="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path clipRule="evenodd" fillRule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z" />
                                            </svg>
                                        </button>
                                        <h2 className="text-white font-bold  text-xl">Home</h2>
                                    </div>
                                    <div className="space-x-4">
                                        <Link href="/login" className="py-2 px-4 border border-white text-white rounded-lg hover:bg-[#a92138] hover:border-[#a92138] transition">Login</Link>
                                        <Link href="/register" className="py-2 px-4 border border-[#a92138] bg-[#a92138] text-white rounded-lg hover:bg-white hover:border-white hover:text-[#a92138] transition">Register</Link>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="">
                            {children}
                        </div>
                    </div>

                </div>
            </div>

            {/* <div className="flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0">
            <div>
                <Link href="/">
                    <ApplicationLogo className="h-20 w-20 fill-current text-gray-500" />
                </Link>
            </div>

           
        </div> */}
        </>
    );
}
