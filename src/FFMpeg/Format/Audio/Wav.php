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
 * The WAV audio format
 */
class Wav extends DefaultAudio
{
    public function __construct($fileFormat = 'wav')
    {
        $this->audioCodec = 'pcm_s16le';
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
        return array('pcm_s16le');
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableFileFormats()
    {
        return array('wav');
    }
}
