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
 * The Vorbis audio format
 */
class Vorbis extends DefaultAudio
{
    public function __construct($fileFormat = 'oga')
    {
        $this->audioCodec = 'vorbis';
        $this->setFileFormat($fileFormat);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtraParams()
    {
        return array(
            '-strict', '-2',
            '-vn',                  // remove video streams
            '-f', $this->fileFormat // force file format
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableAudioCodecs()
    {
        return array('vorbis');
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableFileFormats()
    {
        return array('oga');
    }
}
