<?php

/*
 * This file is part of PHP-FFmpeg.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FFMpeg\Format\Audio;

/**
 * The Flac audio format
 */
class Flac extends DefaultAudio
{
    public function __construct($fileFormat = 'flac')
    {
        $this->audioCodec = 'flac';
        $this->setFileFormat($fileFormat);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtraParams()
    {
        return array(
          '-vn',                  // remove video streams
          '-f', $this->fileFormat // force file format
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableAudioCodecs()
    {
        return array('flac');
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableFileFormats()
    {
        return array('flac');
    }
}
