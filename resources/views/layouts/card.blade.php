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
                <div class="card shadow">
                    <div class="card-image">
                        <figure class="image container is-128x128">
                            <img class="is-rounded"
                                 src="https://cdn.discordapp.com/avatars/{{ $json->id }}/{{ $json->avatar }}.png?size=2048">
                        </figure>
                    </div>
                    <div class="media-content has-text-centered">
                        <p class="title is-4">{{ $json->username }}#<small>{{ $json->discriminator  }}</small></p>
                    </div>
                    <br />
                    <div class="content">
                    $json
                        A Cookie V2 with a passion for music & web development
                        <br />
                        <br />
                        <small>Ask me anything at: askmeanything@trapdoes.tech</small>
                    </div>
                </div>
                <br/>
                <nav class="panel has-text-centered" style="background-color: white;">
                            <div class="panel-block">
                                <div class="columns is-multiline is-centered">

                                <div class="container is-fluid is-centered">

                                <div class="column">

                                <a href="https://trapdoes.tech">
                                <span class="tag is-info is-medium">My Website</span>
                                </a>
                            </div>
                            <div class="column">
                                <a href="https://discord.com/users/390179632911089666">
                                    <span class="tag is-info is-medium">My Discord</span>
                                </a>
                            </div>
                            <div class="column">
                                <a href="https://dsc.bio/trap">
                                    <span class="tag is-info is-medium">Discord Bio</span>
                                </a>
                            </div>
                            <div class="column">
                                <a href="mailto:neko@trapdoes.tech">
                                    <span class="tag is-info is-medium">neko@trapdoes.tech</span>
                                </a>

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
