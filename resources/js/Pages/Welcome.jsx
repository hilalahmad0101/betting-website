import { Navbar } from '@/Components/User/Navbar';
import { Head, Link } from '@inertiajs/react';
import GuestLayout from '@/Layouts/GuestLayout';
import Slider from '@/Components/User/Slider';
import CategoryWise from '@/Components/User/CategoryWise';
export default function Welcome({ auth }) {


    return (
        <>
            <GuestLayout>
                <Head title="Home Page" />
                <Slider />
                <CategoryWise  title={'New'}/>
                <CategoryWise  title={'Top'}/>
                <CategoryWise  title={'Trending'}/>
                <CategoryWise  title={'Latest'}/>
                <CategoryWise  title={'Megaways'}/>
            </GuestLayout>
        </>
    );
}
