<?= $this->extend('layout\template') ?>
<?= $this->section('content') ?>
<?= $this->include('components/navbar') ?>

<div class="flex flex-col items-center h-screen bg-[#E5E9F0]">
    <div class="my-8"></div>
    <p class="text-5xl font-extrabold py-28 text-[#434C5E] max-w-screen-xl mx-auto">About Us</p>
    <div class="flex items-center justify-between text-[#434C5E] max-w-screen-xl mx-auto p-4">
        <div class="flex flex-col w-5/12 gap-8">
            <p class="font-bold text-3xl">Our Car Dealership</p>
            <p class="">Insert your compelling story, history, values, and mission statement here, showcasing why your dealership is unique.</p>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
