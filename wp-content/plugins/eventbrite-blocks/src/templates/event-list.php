<ul>
    <?php foreach ($data['events'] as $event) : ?>
        <?php
        $title = $event['name']['text'];
        $backgroundImage = $event['logo']['original']['url'];
        $startDate = $event['start']['local'];
        $cost = $event['ticket_classes'][0]['cost']['display'];
        $description = $event['description']['html'];
        $is_live = $event['status'] === 'live';
        ?>
        <article class="max-w-xs w-full px-2 mb-4 h-full">
            <div class="event__single">
                <?php if ($backgroundImage) : ?>
                    <div class="h-32 flex-none bg-cover bg-center rounded-t text-center overflow-hidden" style="background-image: url(<?= $backgroundImage; ?>)"></div>
                <?php endif; ?>
                <div class="border-r border-b border-l border-grey-light bg-white rounded-b py-4 px-2 flex flex-col justify-between leading-normal shadow-md">
                    <div class="event__details flex">
                        <div class="event__details--left">
                            <div class="event__details--dateWrapper text-center">
                                <p class="event__details--dateMonth text-sm text-red uppercase my-0 font-sans">
                                    <time>
                                        <?= date_format(new DateTime($startDate), "M"); ?>
                                    </time>
                                </p>
                                <p class="event__details--dateDay text-xl text-grey-dark my-0 font-sans">
                                    <time>
                                        <?= date_format(new DateTime($startDate), "d"); ?>
                                    </time>
                                </p>
                            </div>
                        </div>
                        <div class="event__details--right ml-2">
                            <div class="event__details--rightInnerTop">
                                <h3 class="my-0 text-black font-semibold text-sm">
                                    <?= $title; ?>
                                </h3>
                                <div class="event__details--dateWrapper">
                                    <time class="event__details--date font-sans text-grey-dark text-xs">
                                        <?= date_format(new DateTime($startDate), "D, M d Y, ha"); ?>
                                    </time>
                                </div>
                                <p class="text-sm text-grey-dark flex items-center font-sans mb-2">
                                    <span>
                                        <?= $cost ? $cost : null; ?>
                                    </span>
                                </p>
                            </div>
                            <div class="event__details--rightInnerBottom">
                                <div class="event__details--buttonWrapper flex justify-between">
                                    <?php if ($description) : ?>
                                        <button data-tippy-content="<?= $description; ?>" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 mr-2 rounded">info</button>
                                    <?php endif; ?>
                                    <?php if ($is_live) : ?>
                                        <button :id="eventBriteModalId(event.id)" type="button" class="bg-orange hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">Sign up</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    <?php endforeach; ?>
</ul>
