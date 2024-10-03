import React, { useState } from "react";
import Carousel from 'react-multi-carousel';
import 'react-multi-carousel/lib/styles.css';

const responsive = {
    desktop: {
        breakpoint: { max: 3000, min: 1024 },
        items: 3, // Number of items to show on desktop
    },
    tablet: {
        breakpoint: { max: 1024, min: 664 },
        items: 2, // Number of items to show on tablet
    },
    mobile: {
        breakpoint: { max: 464, min: 0 },
        items: 1, // Number of items to show on mobile
    },
};
const CategoryWise = ({title}) => {
    const [currentIndex, setCurrentIndex] = useState(0);


    const prevSlide = () => {
        const newIndex = currentIndex === 0 ? images.length - 1 : currentIndex - 1;
        setCurrentIndex(newIndex);
    };

    const nextSlide = () => {
        const newIndex = (currentIndex + 1) % images.length;
        setCurrentIndex(newIndex);
    };

    const blogPosts = [
        {
            title: "Noteworthy ",
            description:
                "Here are the biggest enterprise technology acquisitions of 2021 so far.",
            image: "https://flowbite.com/docs/images/blog/image-1.jpg",
        },
        {
            title: "Top trends in AI",
            description:
                "AI advancements are reshaping the world in various sectors. Explore    .",
            image: "https://flowbite.com/docs/images/blog/image-2.jpg",
        },
        {
            title: "Noteworthy ",
            description:
                "Here are the biggest enterprise technology acquisitions of 2021 so far.",
            image: "https://flowbite.com/docs/images/blog/image-1.jpg",
        },
        {
            title: "Top trends in AI",
            description:
                "AI advancements are reshaping the world in various sectors. Explore    .",
            image: "https://flowbite.com/docs/images/blog/image-2.jpg",
        },
        {
            title: "Noteworthy ",
            description:
                "Here are the biggest enterprise technology acquisitions of 2021 so far.",
            image: "https://flowbite.com/docs/images/blog/image-1.jpg",
        },
        {
            title: "Top trends in AI",
            description:
                "AI advancements are reshaping the world in various sectors. Explore    .",
            image: "https://flowbite.com/docs/images/blog/image-2.jpg",
        },
        {
            title: "Noteworthy ",
            description:
                "Here are the biggest enterprise technology acquisitions of 2021 so far.",
            image: "https://flowbite.com/docs/images/blog/image-1.jpg",
        },
        {
            title: "Top trends in AI",
            description:
                "AI advancements are reshaping the world in various sectors. Explore    .",
            image: "https://flowbite.com/docs/images/blog/image-2.jpg",
        },
        {
            title: "Noteworthy ",
            description:
                "Here are the biggest enterprise technology acquisitions of 2021 so far.",
            image: "https://flowbite.com/docs/images/blog/image-1.jpg",
        },
        {
            title: "Top trends in AI",
            description:
                "AI advancements are reshaping the world in various sectors. Explore    .",
            image: "https://flowbite.com/docs/images/blog/image-2.jpg",
        },
        {
            title: "Noteworthy ",
            description:
                "Here are the biggest enterprise technology acquisitions of 2021 so far.",
            image: "https://flowbite.com/docs/images/blog/image-1.jpg",
        },
        {
            title: "Top trends in AI",
            description:
                "AI advancements are reshaping the world in various sectors. Explore    .",
            image: "https://flowbite.com/docs/images/blog/image-2.jpg",
        },
        // Add more blog posts here
    ];

    return (


        <div id="gallery" className="relative w-full px-4 my-20" data-carousel="slide">
            {/* Carousel wrapper */}
            {/* // <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"> */}
            <div>
                <h2 className="font-bold text-xl md:text-3xl my-3">{title}</h2>
            </div>
            <Carousel
                responsive={responsive}
                infinite={true}
                autoPlay={false}
                keyBoardControl={true}
                 itemClass="carousel-item-padding-40-px"
            >
                {blogPosts.map((post, index) => (
                    <div
                        key={index}
                        className="bg-white border mx-1 border-gray-200 rounded-lg shadow "
                    >
                        <a href="#">
                            <img className="rounded-t-lg" src={post.image} alt={post.title} />
                        </a>
                        <div className="p-5">
                            <a href="#">
                                <h5 className="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black ">
                                    {post.title}
                                </h5>
                            </a>
                            <p className="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                {post.description}
                            </p>
                            <a
                                href="#"
                                className="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            >
                                Read more
                                <svg
                                    className="rtl:rotate-180 w-3.5 h-3.5 ms-2"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 14 10"
                                >
                                    <path
                                        stroke="currentColor"
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                        strokeWidth="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                ))}
            </Carousel>

            {/* </div> */}
        </div>
    );
};

export default CategoryWise;
