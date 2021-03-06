<?php

/*
 * This file is part of PHP-FFmpeg.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FFMpeg\Format\Video;

/**
 * The WebM video format
 */
class WebM extends DefaultVideo
{
    public function __construct($audioCodec = 'libvorbis', $videoCodec = 'libvpx', $fileFormat = 'webm')
    {
        $this
            ->setAudioCodec($audioCodec)
            ->setVideoCodec($videoCodec)
            ->setFileFormat($fileFormat);
    }

    /**
     * {@inheritDoc}
     */
    public function supportBFrames()
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function getExtraParams()
    {
        return array(
            '-f', $this->fileFormat // force file format
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableAudioCodecs()
    {
        return array('libvorbis');
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableVideoCodecs()
    {
        return array('libvpx', 'libvpx-vp9');
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableFileFormats()
    {
        return array('webm');
    }
}
