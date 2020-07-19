<section class="hero is-medium">
    <div class="hero-head">@include ('layouts.nav')</div>
    @php
        $i = user();
        $json = json_decode($i);
    @endphp
    <div id="waves" class="is-invisible-mobile"></div>
    <div class="container">
        <div class="hero-body">
            <div class="container has-text-centered">
                <nav class="panel has-text-centered" style="background-color: white;">
                    <div class="panel-block">
                        <div class="content">
                            <div class="columns is-multiline is-centered">
                                <div class="container is-fluid is-centered">
                                    <h1 class="title is-1 is-spaced">Koemi Harumi</h1>
                                    <div class="column">
                                        <strong>General:</strong>
                                        <div class="column">
                                            Name: Koemi Harumi
                                        </div>
                                        <div class="column">
                                            Age: 17
                                        </div>
                                        <div class="column">
                                            Birth Date: 25/12/2003
                                        </div>
                                        <div class="column">
                                            Sexual Orientation: Bisexual
                                        </div>
                                        <div class="column">
                                            Sex: Male. Looks remarkably like a girl
                                        </div>
                                        <div class="column">
                                            Siblings: None known
                                        </div>
                                    </div>
                                    <div class="column">
                                        <strong>Appearance</strong>
                                        <div class="column">
                                            Height: 5ft 7
                                        </div>
                                        <div class="column">
                                            Weight: 130lbs
                                        </div>
                                        <div class="column">
                                            Race: Neko
                                        </div>
                                        <div class="column">
                                            Eye Color: Light pink
                                        </div>
                                        <div class="column">
                                            Hair style: Light Pink
                                        </div>
                                        <div class="column">
                                            Glasses: None
                                        </div>
                                        <div class="column">
                                            Skin Color: Tanned white
                                        </div>
                                        <div class="column">
                                            Hair Style: Messy
                                        </div>
                                        <div class="column">
                                            Reference Image (As close as I can find to my imagination): <a href="https://i.trapdoes.tech/u/21.23.18-19.07.20.png">https://i.trapdoes.tech/u/21.23.18-19.07.20.png</a>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="column">
                                            <strong>About Him:</strong>
                                        </div>
                                        <div class="column">
                                            Personality: A fun and bubbly person with a lot of character. They will always try to help out best they can and is very loyal if they find a master.
                                        </div>
                                        <div class="column">
                                            Likes: Loves going out on adventures, listening to music, looking at nature for it's true beauty
                                        </div>
                                        <div class="column">
                                            Dislikes: Mean people, fake people, things that cause great displeasure, very loud noises
                                        </div>
                                        <div class="column">
                                            Greatest flaw: Trusts people too easily
                                        </div>
                                        <div class="column">
                                            Favourite color: Light pink
                                        </div>
                                        <div class="column">
                                            Favourite music: Relaxing, calm music
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
</section>
<style>
    .card {
        padding: 10%;
    }
    .shadow {
        width: 250px;
        box-shadow: 0 40px 48px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        text-align: center;
    }
</style>
<script>
    VANTA.HALO({
        el: "#waves",
        mouseControls: true,
        touchControls: true,
        minHeight: 1080.00,
        minWidth: 1080.00,
        baseColor: 0xf77fe2,
        backgroundColor: 0xb67dac
    })
</script>
