<?php

namespace Hedii\ColissimoApi;

class ColissimoApi {

    /**
     * Get the colissimo status.
     *
     * @param string $id
     * @return array
     * @throws \Hedii\ColissimoApi\ColissimoApiException
     */
    public function get(string $id, $user_agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36") {
        $data = (new Parser($id, $user_agent))->run();

        if (empty($data)) {
            throw new ColissimoApiException("Cannot find status for colissimo id `{$id}`");
        }

        return $data;
    }

}
