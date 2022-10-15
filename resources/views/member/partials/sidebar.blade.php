<div class="sidebar border mt-5">
    <ul class="list-unstyled m-0 p-0">
        <li class="border-bottom active"><a href="" class="d-block text-decoration-none py-2 px-3"> <i
                    class="fa-solid fa-gauge"></i><span>Dashboard</span> </a></li>
        <li class="border-bottom submenu-parent"><a href="#" class="d-block text-decoration-none py-2 px-3"><i
                    class="fa-solid fa-thumbtack"></i><span>Save Document</span><i class="fa-solid fa-angle-down "></i>
            </a>

            <ul class="list-unstyled submneu animate__fadeInDown">
                <li class="">
                    <a href="{{ route('save.password.document') }}" class="d-block text-decoration-none py-1"><i
                            class="fa-solid fa-arrow-right"></i>Save
                        Password
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('save.admit.document') }}" class="d-block text-decoration-none py-1"><i
                            class="fa-solid fa-arrow-right"></i>Admit Card
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('save.hardcopy.document') }}" class="d-block text-decoration-none py-1"><i
                            class="fa-solid fa-arrow-right"></i>Hard Copy
                    </a>
                </li>

                <li class="">
                    <a href="{{ route('save.job.document') }}" class="d-block text-decoration-none py-1"><i
                            class="fa-solid fa-arrow-right"></i>Job
                        Circular
                    </a>
                </li>

                <li class="">
                    <a href="" class="d-block text-decoration-none py-1"><i
                            class="fa-solid fa-arrow-right"></i>Job Apply Report
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('member.cv.index') }}" class="d-block text-decoration-none py-1"><i
                            class="fa-solid fa-arrow-right"></i>Save CV
                    </a>
                </li>
            </ul>

        </li>
        <li class="border-bottom submenu-parent">
            <a href="#" class="d-block text-decoration-none py-2 px-3">
                <i class="fa-solid fa-book"></i><span>Book</span><i class="fa-solid fa-angle-down "></i>
            </a>

            <ul class="list-unstyled submneu animate__fadeInDown">
                <li class="">
                    <a href="{{ route('member.book.index') }}" class="d-block text-decoration-none py-1">
                        <i class="fa-solid fa-arrow-right"></i>Book List
                    </a>
                </li>
                <li class="">
                    <a href="" class="d-block text-decoration-none py-1">
                        <i class="fa-solid fa-arrow-right"></i>My Order
                    </a>
                </li>
            </ul>

        </li>
        <li class="border-bottom">
            <a href="{{ route('member.exam.list') }}" class="d-block text-decoration-none py-2 px-3">
                <i class="fa-solid fa-list-check"></i><span>Exam</span>
            </a>
        </li>
        <li class="border-bottom">
            <a href="{{ route('member.sheet.index') }}" class="d-block text-decoration-none py-2 px-3">
                <i class="fas fa-file-pdf"></i><span>Lecture Sheet</span>
            </a>
        </li>
        <li class="border-bottom">
            <a href="{{ route('member.gk') }}" class="d-block text-decoration-none py-2 px-3">
                <i class="fa-brands fa-gg"></i><span>Current GK</span>
            </a>
        </li>
        <li class="border-bottom">
            <a href="{{ route('member.practice.index') }}" class="d-block text-decoration-none py-2 px-3">
                <i class="fa-solid fa-chart-simple"></i><span>Practice Question</span>
            </a>
        </li>
        <li class="border-bottom">
            <a href="" class="d-block text-decoration-none py-2 px-3">
                <i class="fa-solid fa-user"></i><span>Profile</span>
            </a>
        </li>
    </ul>
</div>
