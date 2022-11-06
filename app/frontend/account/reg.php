<link href="https://cdn.jsdelivr.net/npm/daisyui@2.38.1/dist/full.css" rel="stylesheet" type="text/css" />

<?php 
        include("../../../configurations/configurations.php");
        include("../../../app\backend\inc\manager/reg_manager.php");
?>
    <section class="bg-gray-50">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
            <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
            Flowbite    
        </a>
        <div class="w-full bg-white rounded-2xl md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Create an Account
                </h1>
                <form class="space-y-4 md:space-y-6" action="reg.php" method="POST">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Full Name</label>
                        <input type="text" name="user_name" value="<?php

if (isset($_SESSION['user_name'])){
    echo $_SESSION['user_name'];
}?>"  class="input w-full bg-slate-100" data-theme="winter" placeholder="Joe McDonald" required="">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="text" name="user_email" value="<?php

if (isset($_SESSION['user_email'])){
    echo $_SESSION['user_email'];
}?>" 
id="email"  class="input w-full bg-slate-100" data-theme="winter" placeholder="name@company.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="user_password" value="<?php

if (isset($_SESSION['user_password'])){
    echo $_SESSION['user_password'];
}?>" id="password" placeholder="••••••••" class="input w-full bg-slate-100" data-theme="winter" required="">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" type="checkbox" class="checkbox checkbox w-6 h-6" required="">
                            </div>
                            <div class="ml-2 text-sm">
                                <label for="remember" class="text-gray-500">Remember me</label>
                            </div>
                        </div>
                        <a href="#" class="text-sm font-medium text-indigo-600 hover:underline">Forgot password?</a>
                    </div>
                    <button name="reg_submit" type="submit" class="w-full text-white btn border-none bg-indigo-600 hover:bg-indigo-700 focus:outline-none rounded-2xl text-sm px-5 py-2.5 text-center">Register</button>
                    <p class="text-sm font-light text-gray-500">
                        Don’t have an account yet? <a href="#" class="font-medium text-indigo-600 hover:underline">Sign up</a>     
    </p>
                </form>   
            </div>
        </div>
    </div>
    </section>



<script src="https://cdn.tailwindcss.com"></script>
