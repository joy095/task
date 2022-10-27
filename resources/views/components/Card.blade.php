<div
    className="h-screen relative flex flex-col text-center md:text-left md:flex-row max-w-7xl justify-evenly mx-auto items-center">
    <h3 className="absolute top-24 uppercase tracking-[20px] text-gray-500 text-2xl">
        Conatct
    </h3>

    <div className="flex flex-col space-y-10">
        <div className="space-y-10">
            <div className="flex items-center space-x-5 justify-center">
                <PhoneIcon className="h-7 w-7 text-[#f7ab0a] animate-pulse" />
                <p className="text-2xl">+91-6295511263</p>
            </div>
        </div>

        <div>
            <div className="flex items-center space-x-5 justify-center">
                <EnvelopeIcon className="h-7 w-7 text-[#f7ab0a] animate-pulse" />
                <p className="text-2xl">
                    joykarmakar987654321@gmail.com
                </p>
            </div>
        </div>

        <div>
            <div className="flex items-center space-x-5 justify-center">
                <MapPinIcon className="h-7 w-7 text-[#f7ab0a] animate-pulse" />
                <p className="text-2xl">CoochBehar, WestBengal</p>
            </div>
        </div>

        <form className="flex flex-col space-y-2 w-fit mx-auto" }>
            <div className="flex space-x-2">
                <input placeholder="Name" className="contactInput" type="text" autoComplete="off" />
                <input placeholder="Email" className="contactInput" type="email" autoComplete="off" />
            </div>

            <input placeholder="Subject" className="contactInput" type="text" autoComplete="off" />

            <textarea placeholder="Message" className="contactInput">
                    <button className="bg-[#f7ab0a] py-5 px-10 rounded-md text-black font-bold text-lg">
                        Submit
                    </button>
                </form>
    </div>
</div>