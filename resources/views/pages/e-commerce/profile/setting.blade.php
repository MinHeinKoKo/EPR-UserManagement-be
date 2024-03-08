@extends('layout.profile')
@section('title', 'Mobile E-commerce |Profile')
@section('content')

    <section class="bg-gray-100">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="flex w-full justify-center">
                <div class="rounded-lg bg-white p-8 w-full shadow-lgl g:p-12">
                    <form action="#" class="space-y-4">
                      <h1 class="text-center text-xl font-semibold tracking-wider">
                        User Information
                      </h1>
                        <div>
                            <label class="sr-only" for="name">Name</label>
                            <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Name" type="text"
                                id="name" />
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="sr-only" for="email">Email</label>
                                <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Email address"
                                    type="email" id="email" />
                            </div>

                            <div>
                                <label class="sr-only" for="phone">Phone</label>
                                <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Phone Number"
                                    type="tel" id="phone" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                          <div>
                              <label class="sr-only" for="password">Email</label>
                              <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Password"
                                  type="password" id="email" />
                          </div>

                          <div>
                              <label class="sr-only" for="confirm">Phone</label>
                              <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Confirm Password"
                                  type="password" id="confirm" />
                          </div>
                      </div>

                        <div>
                            <label class="sr-only" for="address">Address</label>

                            <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Please enter your address here!" rows="3" id="address"></textarea>
                        </div>

                        <div class="mt-4">
                            <button type="submit"
                                class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
